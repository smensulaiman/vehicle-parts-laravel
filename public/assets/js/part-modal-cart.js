document.addEventListener('DOMContentLoaded', () => {

    const addToCart = (button) => {
        const id = button.dataset.id;
        const name = button.dataset.name;
        const quantity = button.dataset.quantity || 1;
        const price = button.dataset.price;

        fetch(cartStoreUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({id, name, quantity, price})
        })
            .then(response => response.json())
            .then(data => {

                if (data.code === 200) {
                    button.disabled = true;
                    button.innerHTML = '<del>' + button.innerHTML + '</del>';
                    button.classList.add('disabled');

                    flasher.success(data.message || "Data has been saved successfully!");
                } else {
                    flasher.error(data.message || "An unexpected error occurred.");
                }

            })
            .catch(error => {
                console.error('Fetch error:', error);
                flasher.error("Oops! Something went wrong!", error.message);
            });
    };

    document.body.addEventListener('click', event => {
        if (event.target && event.target.matches('a.add-to-cart')) {
            event.preventDefault();
            addToCart(event.target);
        }
    });
});
