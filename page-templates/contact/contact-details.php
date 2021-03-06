<div class="contact-details">
    <ul>
        <?php if ( !empty( carbon_get_theme_option( 'southern_phone' ) ) ):
        $southern_phone = carbon_get_theme_option( 'southern_phone' );?>
            <li><a class="telephone" href="tel:<?php echo $southern_phone; ?>"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.165 19.3333C8.21149 19.3475 0.657332 11.7028 0.66798 1.83628C0.66798 1.19195 1.19031 0.666687 1.83465 0.666687H4.9139C5.49206 0.666687 5.98322 1.0915 6.06812 1.6634C6.2716 3.03408 6.67067 4.36848 7.2532 5.62584L7.37309 5.88461C7.53979 6.24441 7.4268 6.67192 7.10409 6.90237C6.15048 7.58338 5.78604 8.95417 6.52895 10.0238C7.46121 11.366 8.63636 12.5409 9.97828 13.4727C11.0478 14.2154 12.4184 13.851 13.0994 12.8976C13.33 12.5747 13.7577 12.4617 14.1178 12.6285L14.3753 12.7478C15.6328 13.3303 16.9673 13.7294 18.3381 13.9328C18.91 14.0177 19.3346 14.5088 19.3346 15.087V18.1667C19.3346 18.811 18.811 19.3333 18.1667 19.3333L18.165 19.3333Z" fill="#002145"/>
            </svg><span><?php echo $southern_phone; ?></span></a></li>
        <?php endif;?>

        <?php if ( !empty( carbon_get_theme_option( 'southern_email' ) ) ):
        $southern_email = carbon_get_theme_option( 'southern_email' );?>
            <li><a class="email" href="mailto:<?php echo antispambot($southern_email); ?>"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.332 23.3334H4.66536C3.3767 23.3334 2.33203 22.2887 2.33203 21V6.89852C2.38641 5.64966 3.41532 4.66551 4.66536 4.66669H23.332C24.6207 4.66669 25.6654 5.71136 25.6654 7.00002V21C25.6654 22.2887 24.6207 23.3334 23.332 23.3334ZM4.66536 9.17936V21H23.332V9.17936L13.9987 15.4L4.66536 9.17936ZM5.5987 7.00002L13.9987 12.6L22.3987 7.00002H5.5987Z" fill="#002145"/>
            </svg><span><?php echo antispambot($southern_email); ?></span></a></li>
        <?php endif;?>

        <?php if ( !empty( carbon_get_theme_option( 'southern_location' ) ) ):
        $southern_location = carbon_get_theme_option( 'southern_location' );?>
            <li><a href="#" class="location"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.9987 24.5C12.5251 23.2431 11.1592 21.8651 9.91537 20.3805C8.0487 18.151 5.83203 14.8307 5.83203 11.6667C5.83038 8.36213 7.82032 5.38229 10.8733 4.11763C13.9262 2.85297 17.4404 3.55278 19.776 5.8905C21.3119 7.41954 22.1723 9.49945 22.1654 11.6667C22.1654 14.8307 19.9487 18.151 18.082 20.3805C16.8382 21.8651 15.4723 23.2431 13.9987 24.5ZM13.9987 5.83333C10.7786 5.83719 8.16922 8.4466 8.16537 11.6667C8.16537 13.027 8.7802 15.3825 11.7062 18.8837C12.4274 19.7447 13.1925 20.5679 13.9987 21.35C14.8049 20.5689 15.5705 19.7468 16.2924 18.8872C19.2172 15.3813 19.832 13.0258 19.832 11.6667C19.8282 8.4466 17.2188 5.83719 13.9987 5.83333ZM13.9987 15.1667C12.0657 15.1667 10.4987 13.5997 10.4987 11.6667C10.4987 9.73367 12.0657 8.16666 13.9987 8.16666C15.9317 8.16666 17.4987 9.73367 17.4987 11.6667C17.4987 12.5949 17.13 13.4852 16.4736 14.1415C15.8172 14.7979 14.927 15.1667 13.9987 15.1667Z" fill="#002145"/>
            </svg><span><?php echo $southern_location; ?></span></a></li>
        <?php endif;?>
    </ul>
</div>
