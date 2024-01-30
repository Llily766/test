function handleSliderChange(sliderId, outputId, unit) {
    let slider = document.getElementById(sliderId);
    let output = document.getElementById(outputId);
    output.innerText = slider.valueAsNumber + unit;

    slider.addEventListener('input', () => {
        output.innerText = slider.valueAsNumber + unit;
        applyFilters();
    });
}

function applyFilters() {
    let priceValue = parseInt(document.getElementById('myRange').value, 10);
    let kilomValue = parseInt(document.getElementById('myRange1').value, 10);
    let yearValue = parseInt(document.getElementById('myRange2').value, 10);

    let cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
        let price = parseInt(card.querySelector('.btn').textContent.trim().replace('€', '').replace(' ', ''), 10);
        let kilom = parseInt(card.querySelector('.kilom').textContent.trim().replace('km', '').replace(' ', ''), 10);
        let year = parseInt(card.querySelector('.annee').textContent.trim(), 10);

        if (price >= priceValue && kilom >= kilomValue && year >= yearValue) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
}

document.addEventListener('DOMContentLoaded', (event) => {
    handleSliderChange('myRange', 'curr', ' €');
    handleSliderChange('myRange1', 'curr1', ' km');
    handleSliderChange('myRange2', 'curr2', '');

    applyFilters(); // Apply filters initially
});
