// resources/js/ai-search.js

document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const imageFile = document.getElementById('imageFile');
    const submitButton = document.getElementById('submitButton');
    const imagePreview = document.getElementById('imagePreview');
    const resultElement = document.getElementById('result');
    const aiSearchForm = document.getElementById('aiSearchForm');

    // Confidence threshold setting 
    const CONFIDENCE_THRESHOLD = 0.6;

    // Add image preview functionality
    imageFile?.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file && file.type.match('image/*')) {
            const reader = new FileReader();
            reader.onload = function(event) {
                imagePreview.innerHTML = `<img src="${event.target.result}" class="img-fluid" alt="Preview">`;
            };
            reader.readAsDataURL(file);
        }
    });

    // Handle form submission
    submitButton?.addEventListener('click', async () => {
        const file = imageFile.files[0];

        if (!file || !file.type.match('image/*')) {
            alert('Please select an image file (jpg, jpeg, png).');
            return;
        }

        // Show loading state
        resultElement.textContent = 'Processing...';
        submitButton.disabled = true;

        const formData = new FormData();
        formData.append('image', file);

        try {
            // Send the image to your Laravel backend
            const response = await axios.post('/api/ai-search', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            });

            // Handle the response
            if (response.data.error) {
                console.error('Error:', response.data.error);
                resultElement.textContent = 'An error occurred during processing.';
                return;
            }

            if (response.data.predictions && response.data.predictions.length > 0) {
                const categoryMapping = {
                    'Headphone': 1,
                    'Mouse': 2,
                    'Monitor': 3,
                    'Gamepad': 4,
                    'USB-Flash-Drive': 5,
                    'Speaker': 6,
                    'Powerbank': 7,
                    'Keyboard': 8
                };
            
                // Filter predictions based on confidence threshold
                const filteredPredictions = response.data.predictions.filter(
                    pred => pred.confidence >= CONFIDENCE_THRESHOLD
                );

                // Check if any predictions meet the confidence threshold
                if (filteredPredictions.length === 0) {
                    resultElement.textContent = 'No objects detected with sufficient confidence.';
                    return;
                }
            
                // Map filtered predictions to results array
                const results = filteredPredictions.map(pred => ({
                    class: pred.class.trim(),
                    confidence: pred.confidence
                }));
            
                // Format results for display
                const formattedResults = results.map(result => 
                    `Product: ${result.class}\nConfidence: ${(result.confidence * 100).toFixed(2)}%`
                ).join('\n\n');
            
                resultElement.textContent = formattedResults;
            
                // Find the prediction with the highest confidence
                const highestConfidencePrediction = results.reduce((prev, current) => 
                    (prev.confidence > current.confidence) ? prev : current
                );
            
                // Get the category number, default to 0 if the class is not in the mapping
                const categoryNumber = categoryMapping[highestConfidencePrediction.class] || 0;
            
                if (categoryNumber > 0) {
                    // Redirect to the category search URL
                    window.location.href = `/search/category/${categoryNumber}`;
                } else {
                    // Handle case when no matching category is found
                    console.error(`No category mapping found for class: ${highestConfidencePrediction.class}`);
                    resultElement.textContent = `No category mapping found for detected product: ${highestConfidencePrediction.class}`;
                }
            } else {
                resultElement.textContent = 'No objects detected in the image.';
            }
            
        } catch (error) {
            console.error('Error:', error);
            resultElement.textContent = `Error: ${error.message}`;
            if (error.response) {
                console.error('Response data:', error.response.data);
                console.error('Response status:', error.response.status);
                resultElement.textContent += `\nStatus: ${error.response.status}`;
            }
        } finally {
            submitButton.disabled = false;
        }
    });
});