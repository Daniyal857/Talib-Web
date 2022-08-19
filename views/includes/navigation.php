<header class="customHeader d-flex flex-wrap justify-content-center py-3">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $base_url; ?>">
                    <img src="/assets/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item"><a href="<?php echo $base_url; ?>" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="<?php echo $base_url; ?>" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="<?php echo $base_url; ?>/items-page.php" class="nav-link">Items</a></li>
                        <li class="nav-item"><a href="<?php echo $base_url; ?>" class="nav-link">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg class="langIcon" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1999 0.6H10.5332C9.42863 0.6 8.5332 1.49543 8.5332 2.6V5.26667H11.1999H2.5332C1.39987 5.26667 0.533203 6.13333 0.533203 7.26667V14.6C0.533203 15.7333 1.39987 16.6 2.5332 16.6H3.19987V20L7.39987 16.6H9.86654C10.9711 16.6 11.8665 15.7046 11.8665 14.6V11.9333H19.1999C20.3332 11.9333 21.1999 11.0667 21.1999 9.93333V2.6C21.1999 1.46667 20.3332 0.6 19.1999 0.6ZM7.7332 13.8667L7.39987 12.8H5.3332L4.9332 13.8667H3.3332L5.5332 7.93333H7.1332L9.3332 13.8667H7.7332ZM17.8665 8.6V9.93333C16.9999 9.93333 16.0665 9.66667 15.2665 9.26667C14.4665 9.66667 13.5332 9.86667 12.5999 9.93333L12.5332 8.6C12.9999 8.6 13.4665 8.53333 13.9332 8.4C13.3332 7.8 12.9332 7.06667 12.7332 6.26667H14.1332C14.3332 6.86667 14.7332 7.33333 15.1999 7.73333C15.9332 7.13333 16.3999 6.26667 16.4665 5.26667H12.4665V3.93333H14.4665V2.6H15.7999V3.93333H17.9999L18.0665 4.6C18.1332 6 17.5999 7.4 16.5999 8.4C17.0665 8.53333 17.4665 8.6 17.8665 8.6Z" fill="white" />
                                </svg>
                                English
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.45801 19.75C6.12884 19.75 5.05342 20.8375 5.05342 22.1666C5.05342 23.4958 6.12884 24.5833 7.45801 24.5833C8.78717 24.5833 9.87467 23.4958 9.87467 22.1666C9.87467 20.8375 8.78717 19.75 7.45801 19.75ZM0.208008 0.416626V2.83329H2.62467L6.97467 12.0045L5.34342 14.965C5.15009 15.3033 5.04134 15.702 5.04134 16.125C5.04134 17.4541 6.12884 18.5416 7.45801 18.5416H21.958V16.125H7.96551C7.79634 16.125 7.66342 15.992 7.66342 15.8229L7.69967 15.6779L8.78717 13.7083H17.7893C18.6955 13.7083 19.493 13.2129 19.9038 12.4637L24.2297 4.62163C24.3294 4.43722 24.3795 4.2301 24.3752 4.02052C24.371 3.81093 24.3124 3.60603 24.2053 3.42585C24.0981 3.24566 23.9461 3.09634 23.764 2.99248C23.5819 2.88863 23.376 2.83378 23.1663 2.83329H5.29509L4.15926 0.416626H0.208008ZM19.5413 19.75C18.2122 19.75 17.1368 20.8375 17.1368 22.1666C17.1368 23.4958 18.2122 24.5833 19.5413 24.5833C20.8705 24.5833 21.958 23.4958 21.958 22.1666C21.958 20.8375 20.8705 19.75 19.5413 19.75Z" fill="white" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="custom-btn primaryBackgroundColor text-white loginBtn d-flex align-items-center" data-bs-toggle="modal" href="#loginModal" role="button">
                login
                <svg class="arrowIcon ms-2" width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36108 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                </svg>
            </a>

            <!-- =========== AFTER LOGIN =============== -->
            <!-- <a class="custom-btn primaryBackgroundColor text-white loginBtn d-flex align-items-center" data-bs-toggle="modal" href="#loginModal" role="button">
                <svg class="profileIcon me-2" width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.769 23.9308C26.2051 22.2029 27.204 20.1545 27.681 17.959C28.1581 15.7634 28.0993 13.4853 27.5097 11.3172C26.9201 9.14916 25.817 7.15502 24.2937 5.50347C22.7704 3.85192 20.8717 2.59155 18.7583 1.82898C16.6449 1.06641 14.3789 0.824071 12.152 1.12247C9.9251 1.42087 7.80284 2.25123 5.96474 3.5433C4.12664 4.83537 2.62677 6.55114 1.59201 8.54546C0.557257 10.5398 0.0180569 12.754 0.0200249 15.0008C0.0207801 18.267 1.17177 21.4286 3.27102 23.9308L3.25102 23.9478C3.32102 24.0318 3.40103 24.1038 3.47303 24.1868C3.56302 24.2898 3.66002 24.3868 3.75302 24.4868C4.03302 24.7908 4.32102 25.0828 4.62302 25.3568C4.71502 25.4408 4.81002 25.5188 4.90302 25.5988C5.22302 25.8748 5.55202 26.1368 5.89302 26.3808C5.93703 26.4108 5.97703 26.4498 6.02103 26.4808V26.4688C8.36313 28.117 11.1571 29.0015 14.021 29.0015C16.8849 29.0015 19.6789 28.117 22.021 26.4688V26.4808C22.065 26.4498 22.104 26.4108 22.149 26.3808C22.489 26.1358 22.819 25.8748 23.139 25.5988C23.232 25.5188 23.327 25.4398 23.419 25.3568C23.721 25.0818 24.009 24.7908 24.289 24.4868C24.382 24.3868 24.478 24.2898 24.569 24.1868C24.64 24.1038 24.721 24.0318 24.791 23.9468L24.769 23.9308ZM14.02 7.00079C14.91 7.00079 15.7801 7.26471 16.5201 7.75918C17.2601 8.25364 17.8369 8.95645 18.1775 9.77872C18.5181 10.601 18.6072 11.5058 18.4336 12.3787C18.2599 13.2516 17.8313 14.0534 17.202 14.6828C16.5727 15.3121 15.7708 15.7407 14.8979 15.9143C14.025 16.088 13.1202 15.9988 12.2979 15.6582C11.4757 15.3177 10.7729 14.7409 10.2784 14.0009C9.78395 13.2608 9.52003 12.3908 9.52003 11.5008C9.52003 10.3073 9.99413 9.16273 10.838 8.31881C11.682 7.4749 12.8266 7.00079 14.02 7.00079ZM6.02702 23.9308C6.04437 22.6178 6.57797 21.3643 7.51238 20.4417C8.44679 19.5191 9.70688 19.0015 11.02 19.0008H17.02C18.3332 19.0015 19.5933 19.5191 20.5277 20.4417C21.4621 21.3643 21.9957 22.6178 22.013 23.9308C19.8199 25.9071 16.9723 27.0009 14.02 27.0009C11.0678 27.0009 8.22018 25.9071 6.02702 23.9308Z" fill="white" />
                </svg>
                Hesham
                <svg class="arrowIcon ms-2" width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 4.81059 0.079009 4.62895 0.219646 4.49502C0.360282 4.36108 0.551026 4.28584 0.749916 4.28584H9.43845L6.21831 1.22068C6.07749 1.08658 5.99838 0.904705 5.99838 0.715059C5.99838 0.525414 6.07749 0.343536 6.21831 0.209436C6.35912 0.0753365 6.5501 0 6.74925 0C6.94839 0 7.13937 0.0753365 7.28019 0.209436L11.7797 4.49438C11.8495 4.56072 11.9049 4.63952 11.9427 4.72629C11.9805 4.81305 12 4.90606 12 5C12 5.09394 11.9805 5.18695 11.9427 5.27371C11.9049 5.36048 11.8495 5.43928 11.7797 5.50562L7.28019 9.79056C7.13937 9.92466 6.94839 10 6.74925 10C6.5501 10 6.35912 9.92466 6.21831 9.79056C6.07749 9.65646 5.99838 9.47459 5.99838 9.28494C5.99838 9.0953 6.07749 8.91342 6.21831 8.77932L9.43845 5.71416H0.749916C0.551026 5.71416 0.360282 5.63892 0.219646 5.50499C0.079009 5.37106 0 5.18941 0 5Z" fill="white" />
                </svg>
            </a> -->
        </nav>
    </div>
</header>