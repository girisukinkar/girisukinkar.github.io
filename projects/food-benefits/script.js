function addCard() {
    const title = document.getElementById('title').value;
    const subtitle = document.getElementById('subtitle').value;
    const hashtags = document.getElementById('hashtags').value.split(',').map(tag => tag.trim());
    const date = document.getElementById('date').value;

    const card = {
        title: title,
        subtitle: subtitle,
        hashtags: hashtags,
        date: date
    };

    displayCard(card);
    saveCard(card);
}

function displayCard(card) {
    const cardsContainer = document.getElementById('cardsContainer');
    const cardElement = document.createElement('div');
    cardElement.classList.add('card');
    cardElement.innerHTML = `
        <h3>${card.title}</h3>
        <h4>${card.subtitle}</h4>
        <p>${card.hashtags.join(', ')}</p>
        <p>${card.date}</p>
    `;
    cardsContainer.appendChild(cardElement);
}

function saveCard(card) {
    const fileData = `Title: ${card.title}\nSubtitle: ${card.subtitle}\nHashtags: ${card.hashtags.join(', ')}\nDate: ${card.date}\n\n`;
    const blob = new Blob([fileData], { type: 'text/plain' });
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'cards.txt';
    a.click();
}
