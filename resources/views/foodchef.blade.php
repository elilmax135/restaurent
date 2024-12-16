

<link rel="stylesheet" href="csss/foodchef.css">
<section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Our Chefs</h6>
                    <h2>We offer the best ingredients for you</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div id="chefCarousel" class="chef-carousel">
                @foreach($chef as $index => $chef)
                    <div class="chef-item" data-index="{{ $index }}">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <img src="chefimage/{{ $chef->image }}" alt="Chef">
                        </div>
                        <div class="down-content">
                            <h4>{{ $chef->name }}</h4>
                            <span>{{ $chef->speciality }}</span>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>


    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".chef-item");
    let currentIndex = 0;

    function showItems() {
        items.forEach((item, index) => {
            if (index >= currentIndex && index < currentIndex + 2) {
                item.classList.add("visible");
            } else {
                item.classList.remove("visible");
            }
        });
    }

    function rotateItems() {
        currentIndex = (currentIndex + 2) % items.length; // Move by 3 chefs
        showItems();
    }

    showItems(); // Initial display
    setInterval(rotateItems, 1800); // Rotate every 1 seconds
});

        </script>
</section>
