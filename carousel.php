<?php

$images = [
    get_template_directory_uri() . '/images/img1.JPG',
    get_template_directory_uri() . '/images/img2.JPG',
    get_template_directory_uri() . '/images/img3.JPG',
    get_template_directory_uri() . '/images/img4.JPG',
    get_template_directory_uri() . '/images/img5.JPG'
];

$texts = [
    'Vítek',
    'Vítek',
    'Vítek',
    'Vítek',
    'Vítek'
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

        function updateCarousel(index) {
            carousel.style.transform = `translateX(-${index * 100}%)`;
            buttons.forEach((button, i) => {
                button.classList.toggle('bg-gray-800', i === index);
                button.classList.toggle('bg-gray-400', i !== index);
            });
            currentIndex = index;
        }

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const index = parseInt(button.getAttribute('data-index'), 10);
                updateCarousel(index);
            });
        });

        // Optional: Automatic sliding
        setInterval(() => {
            const nextIndex = (currentIndex + 1) % buttons.length;
            updateCarousel(nextIndex);
        }, 3000); // Adjust time as needed
    });
</script>

<style>
    .carousel-container {
        width: 100%;
        height: 40rem; /* Height for the carousel */
    }

    .carousel-item {
        min-width: 100%;
        height: 40rem; /* Height for each carousel item */
        position: relative; /* Required for absolute positioning of text */
    }

    .carousel-button.bg-gray-800 {
        background-color: #4a4a4a; /* Active color */
    }

    .carousel-button.bg-gray-400 {
        background-color: #d1d1d1; /* Inactive color */
    }
</style>
