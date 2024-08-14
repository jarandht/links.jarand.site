document.addEventListener("DOMContentLoaded", function() {
    const file = `/json/links.json`;

    fetch(file)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            const cardsContainer = document.getElementById('jsonContainer');
            data.forEach(card => { 
                const cardLink = document.createElement('a');
                
                if(card.colorGradient === "yes"){
                    cardLink.style.background = `linear-gradient(-45deg, ${card.color})`;
                } else {
                    cardLink.style.background = card.color;
                }

                cardLink.target = "_blank";
                cardLink.href = card.url;

                const cardImg = document.createElement('img');
                cardImg.src = card.img;
                cardImg.alt = card.name;
                cardLink.appendChild(cardImg);

                const cardName = document.createElement('p');
                cardName.textContent = card.name;
                cardName.style.color = card.textColor;

                cardLink.appendChild(cardName);

                cardsContainer.appendChild(cardLink);
            });
        })
        .catch(error => console.error('Error fetching the data:', error));
});