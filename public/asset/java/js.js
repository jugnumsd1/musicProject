
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.swiper ul');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let currentPosition = 0;
    const slideWidth = 200; // Adjust this to match the `width` of your `li`

    prevButton.addEventListener('click', () => {
        // Move slider to the right
        currentPosition = Math.min(currentPosition + slideWidth, 0);
        slider.style.transform = `translateX(${currentPosition}px)`;
    });

    nextButton.addEventListener('click', () => {
        // Move slider to the left
        const maxScroll = -(slider.scrollWidth - slider.parentElement.offsetWidth);
        currentPosition = Math.max(currentPosition - slideWidth, maxScroll);
        slider.style.transform = `translateX(${currentPosition}px)`;
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('[data-swiper="geners-slider"] ul');
    const prevButton = document.getElementById('prev1');
    const nextButton = document.getElementById('next1');

    let currentPosition = 0;
    const slideWidth = 278; // Width of the slide (258px slide + 20px margin)

    prevButton.addEventListener('click', () => {
        // Move slider to the right
        currentPosition = Math.min(currentPosition + slideWidth, 0);
        slider.style.transform = `translateX(${currentPosition}px)`;
    });

    nextButton.addEventListener('click', () => {
        // Move slider to the left
        const maxScroll = -(slider.scrollWidth - slider.parentElement.offsetWidth);
        currentPosition = Math.max(currentPosition - slideWidth, maxScroll);
        slider.style.transform = `translateX(${currentPosition}px)`;
    });
});
document.addEventListener("DOMContentLoaded", () => {
    // Select rows and navigation buttons
    const artistRow = document.querySelector("#swiper-wrapper-d710b5b835622ecee");
    const prevButton = document.querySelector(".row1"); // Updated to row1 class
    const nextButton = document.querySelector(".row2"); // Updated to row2 class

    // Helper functions for cyclic rotation
    function moveLeft(row) {
        const firstChild = row.firstElementChild;
        row.appendChild(firstChild); // Move the first child to the end
    }

    function moveRight(row) {
        const lastChild = row.lastElementChild;
        row.prepend(lastChild); // Move the last child to the start
    }

    // Attach event listeners for navigation buttons
    prevButton.addEventListener("click", () => {
        moveRight(artistRow);
    });

    nextButton.addEventListener("click", () => {
        moveLeft(artistRow);
    });
});

function playpauseTrack() {
    var audio = document.getElementById("audioPlayer"); // Get the audio element by ID

    if (audio.paused) {
        audio.play(); // Play the audio if it is paused
    } else {
        audio.pause(); // Pause the audio if it is playing
    }
}
