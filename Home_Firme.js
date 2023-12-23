document.addEventListener("DOMContentLoaded", function() {
    const textElement = document.getElementById("pHero");
    const originalText = textElement.innerText;
  
    function animateText(index) {
      // Split the text into words
      const words = originalText.split(/\s+/);
  
      // Display each word with a delay
      if (index < words.length) {
        setTimeout(() => {
          textElement.innerText = words[index];
          animateText(index + 1);
        }, 1000);
      } else {
        // After displaying all words, wait for a moment and restart the animation
        setTimeout(() => {
          textElement.innerText = originalText;
          animateText(0); // Restart the animation
        }, 1000);
      }
    }
  
    // Start the animation
    animateText(0);
  });
  