document.addEventListener('DOMContentLoaded', function() {
    
  
    const bookCards = document.querySelectorAll('.book-card');
    

    const coverImages = [
        'images/cover1.jpg', 
        'images/cover2.jpg', 
        'images/cover3.jpg', 
        'images/cover4.jpg', 
        'images/cover5.jpg', 
        'images/cover6.jpg', 
        'images/cover7.jpg', 
        'images/cover8.jpg', 
        
    ];

    
    function toggleDetails(card, show) {
        const details = card.querySelector('.book-details');
        
       
        const hoverShadow = '0 10px 20px rgba(78, 52, 46, 0.4)';
        const defaultShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';

        if (details) {
            if (show) {
                
                details.style.opacity = '1';
                details.style.transform = 'translateY(0)';
                card.style.boxShadow = hoverShadow;
                card.style.transform = 'translateY(-5px)';
            } else {
                
                details.style.opacity = '0';
                details.style.transform = 'translateY(10px)';
                card.style.boxShadow = defaultShadow;
                card.style.transform = 'translateY(0)';
            }
        }
    }

    
    bookCards.forEach((card, index) => {
        
        
        const coverDiv = card.querySelector('.book-card-cover');
        
        if (coverDiv && coverImages.length > 0) {
        
            const imageUrl = coverImages[index % coverImages.length]; 
            
            coverDiv.style.cssText = `
                background-image: url(${imageUrl});
                background-size: cover;
                background-position: center;
                height: 180px; /* Görselin yüksekliğini ayarlayın */
                border-radius: 8px;
                margin-bottom: 15px;
            `;
        }

        
        card.addEventListener('mouseenter', function() {
            toggleDetails(card, true);
        });

        card.addEventListener('mouseleave', function() {
            toggleDetails(card, false);
        });
    });


    
    if (bookCards.length > 0) {
        let featuredBook = document.getElementById('featured-book');
        
    
        if (!featuredBook) {
            const randomIndex = Math.floor(Math.random() * bookCards.length);
            featuredBook = bookCards[randomIndex];
            featuredBook.id = 'random-featured-book'; 
            
            
            const badge = document.createElement('div');
            badge.textContent = '🌟 ÖNERİLEN KİTAP 🌟';
            badge.classList.add('js-dynamic-badge'); 
            featuredBook.style.position = 'relative'; 
            featuredBook.prepend(badge); 
        }
        
        
        featuredBook.classList.add('highlighted-of-the-day');
    }
});