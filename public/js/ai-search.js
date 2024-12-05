// resources/js/ai-search.js

document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const imageFile = document.getElementById('imageFile');
    const submitButton = document.getElementById('submitButton');
    const imagePreview = document.getElementById('imagePreview');
    const resultElement = document.getElementById('result');
    const aiSearchForm = document.getElementById('aiSearchForm');

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
        formData.append('image', file); // `file` is the image file object from a file input

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
            } else {
                console.log('Response:', response.data);
            }

            if (response.data.predictions && response.data.predictions.length > 0) {
                const categoryMapping = {
                    'Headset': 1,
                    'Mouse': 2,
                    'Monitor': 3,
                    'Gamepad': 4,
                    'USB-Flash-Drive': 5,
                    'Speaker': 6,
                    'Powerbank': 7,
                    'Keyboard': 8
                };
            
                const results = response.data.predictions.map(pred => ({
                    class: pred.class,
                    confidence: (pred.confidence * 100).toFixed(2) + '%'
                }));
            
                // Create a formatted string for each prediction
                const formattedResults = results.map(result => 
                    `Product: ${result.class}\nConfidence: ${result.confidence}`
                ).join('\n\n');
            
                resultElement.textContent = formattedResults;
            
                // Trigger search with the detected product name and its corresponding category number
                const highestConfidencePrediction = results.reduce((prev, current) => 
                    (parseFloat(prev.confidence) > parseFloat(current.confidence)) ? prev : current
                );
                
                // Get the category number, default to 0 if not found
                const categoryNumber = categoryMapping[highestConfidencePrediction.class] || 0;
                console.log(categoryNumber);
                
                // Modify the search URL to use category-based routing
                window.location.href = `/search/category/${categoryNumber}?n=${encodeURIComponent(highestConfidencePrediction.class)}`;
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