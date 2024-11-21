$(document).ready(function() {
    const imageFile = document.getElementById('imageFile');
    const submitButton = document.getElementById('submitButton');
    const imagePreview = document.getElementById('imagePreview');
    const resultElement = document.getElementById('result');

    // Image preview functionality
    imageFile.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file && file.type.match('image/*')) {
            const reader = new FileReader();
            reader.onload = function(event) {
                imagePreview.innerHTML = `<img src="${event.target.result}" alt="Preview" style="max-width: 100%; max-height: 200px;">`;
            };
            reader.readAsDataURL(file);
        }
    });

    // AI Search submission
    submitButton.addEventListener('click', async () => {
        const file = imageFile.files[0];

        // Validate file
        if (!file || !file.type.match('image/*')) {
            alert('Please select a valid image file.');
            return;
        }

        // Show loading state
        resultElement.textContent = 'Processing...';
        submitButton.disabled = true;

        // Prepare form data
        const formData = new FormData();
        formData.append('image', file);

        try {
            // Send request to Laravel backend
            const response = await axios.post('{{ route("ai.search") }}', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            });

            // Process and display results
            if (response.data.predictions && response.data.predictions.length > 0) {
                const results = response.data.predictions.map(pred => ({
                    class: pred.class,
                    confidence: (pred.confidence * 100).toFixed(2) + '%'
                }));
                
                // Format results
                const formattedResults = results.map(result => 
                    `Product: ${result.class}\nConfidence: ${result.confidence}`
                ).join('\n\n');
                
                resultElement.textContent = formattedResults;

                // Optionally redirect to search results page
                if (response.data.products && response.data.products.length > 0) {
                    // You might want to create a dedicated route for AI search results
                    window.location.href = `/search/ai?classes=${results.map(r => r.class).join(',')}`;
                }
            } else {
                resultElement.textContent = 'No objects detected in the image.';
            }

        } catch (error) {
            console.error('Error:', error);
            resultElement.textContent = `Error: ${error.message}`;
        } finally {
            submitButton.disabled = false;
        }
    });
});