<?php

$images = [
    get_template_directory_uri() . '/images/corousel1.jpg',
    get_template_directory_uri() . '/images/corousel2.jpg',
    get_template_directory_uri() . '/images/corousel3.jpg',
    get_template_directory_uri() . '/images/corousel4.jpg',
    get_template_directory_uri() . '/images/corousel5.jpg'
];

$texts = [
    'Vítek',
    'Černoch',
    'Brčko',
    'Nohy',
    'Předávkování se'
];
?>

<div class="relative w-full overflow-hidden carousel-container">
    <div class="flex transition-transform duration-500 carousel" id="carousel">
        <?php foreach ($images as $index => $image): ?>
            <div class="relative flex items-center w-full carousel-item h-96">
                <img src="<?php echo esc_url($image); ?>" alt="Carousel image" class="object-cover w-full h-full" />
                <div class="absolute inset-x-0 flex justify-center">
                    <div class="container max-w-6xl">
                        <span class="text-3xl font-bold text-black"><?php echo esc_html($texts[$index]); ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="absolute flex transform -translate-x-1/2 bottom-4 left-1/2">
        <?php foreach ($images as $index => $image): ?>
            <button class="w-5 h-5 mx-2 rounded-full carousel-button" data-index="<?php echo esc_attr($index); ?>"></button>
        <?php endforeach; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const buttons = document.querySelectorAll('.carousel-button');
        let currentIndex = 0;
        let autoScrollInterval;

        function updateCarousel(index) {
            carousel.style.transform = `translateX(-${index * 100}%)`;
            buttons.forEach((button, i) => {
                button.classList.toggle('bg-gray-800', i === index);
                button.classList.toggle('bg-gray-400', i !== index);
            });
            currentIndex = index;
        }

        // Function to start auto-scrolling
        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                const nextIndex = (currentIndex + 1) % buttons.length;
                updateCarousel(nextIndex);
            }, 5000); // 5 seconds
        }

        // Stop auto-scrolling
        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        // Set the initial active dot and start auto-scrolling
        updateCarousel(0);
        startAutoScroll();

        // Stop auto-scrolling when a dot is clicked
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const index = parseInt(button.getAttribute('data-index'), 10);
                updateCarousel(index);
                stopAutoScroll(); // Stop auto-scrolling after clicking a dot
            });
        });
    });
</script>

<style>
    .carousel-container {
        width: 100%;
        height: 45rem; /* Height for the carousel */
        padding-top:20px;
    }

    .carousel-item {
        min-width: 100%;
        height: 45rem; /* Height for each carousel item */
        position: relative; /* Required for absolute positioning of text */
        margin-top:20px;
    }

    .carousel-button.bg-gray-800 {
        background-color: #4a4a4a; /* Active color */
    }

    .carousel-button.bg-gray-400 {
        background-color: #d1d1d1; /* Inactive color */
    }
</style>
