document.addEventListener('DOMContentLoaded', function() {
    const bookCards = document.querySelectorAll('.book-card');

    async function fetchCover(title, author, element) {
        const query = encodeURIComponent(`${title} ${author}`);
        const url = `https://www.googleapis.com/books/v1/volumes?q=${query}&maxResults=1`;

        try {
            const response = await fetch(url);
            const data = await response.json();
            
            if (data.items && data.items[0].volumeInfo.imageLinks) {
                const thumbnail = data.items[0].volumeInfo.imageLinks.thumbnail.replace('http:', 'https:');
                element.style.backgroundImage = `url('${thumbnail}')`;
            } else {
                
                element.style.backgroundColor = '#3e2100ff';
                element.innerHTML = '<span style="color:white; font-size:12px; display:block; padding-top:80px;"></span>';
            }
        } catch (error) {
            console.error("Görsel çekilemedi:", error);
            element.style.backgroundColor = '#ccc';
        }
    }

    function toggleDetails(card, show) {
        const details = card.querySelector('.book-details');
        if (details) {
            details.style.opacity = show ? '1' : '0';
            details.style.transform = show ? 'translateY(0)' : 'translateY(10px)';
        }
        card.style.transform = show ? 'translateY(-5px)' : 'translateY(0)';
        card.style.boxShadow = show ? '0 10px 20px rgba(0,0,0,0.15)' : '0 4px 8px rgba(0,0,0,0.1)';
    }

    bookCards.forEach((card) => {
        const title = card.querySelector('h3').innerText;
        const author = card.querySelector('p').innerText;
        const coverDiv = card.querySelector('.book-card-cover');

        if (coverDiv) {
            
            fetchCover(title, author, coverDiv);

            
            coverDiv.style.cssText = `
                height: 220px;
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                margin-bottom: 15px;
                border-radius: 5px;
                transition: 0.3s;
            `;
        }

        
        card.addEventListener('mouseenter', () => toggleDetails(card, true));
        card.addEventListener('mouseleave', () => toggleDetails(card, false));
    });
});
