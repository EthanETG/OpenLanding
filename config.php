<?php 
const INFORMATION = [
    "meta" => [
     "pageName" => "Welcome", // The name of the page displayed in the title. Ex: Welcome - EthanTheGreat, where Welcome is the page name.
     "websiteName" => "EthanTheGreat", // The name of the website displayed in the title. Ex: Welcome - EthanTheGreat, where EthanTheGreat is the website name.
     "favicon" => "https://ethanthegreat.com/images/logo_circle.png" // The link or path to your pages favicon. 
    ],
    "author" => [
        "name" => "EthanTheGreat", // The name of the author to be displayed on the page.
        "logo" => [
            "link" => "https://ethanthegreat.com/images/logo.png", // The link or path to your pages logo.
            "alt" => "Example Logo", // The alternative message that should be displayed if the image is invalid, not supported, or if the user is using a screen reader. This can be blank but is not recommended.
            "round" => true, // A boolean value controlling whether the logo should be rounded or not.
        ],
        "description" => "This is an example description."
    ],
    /* 
    How to use the social links:

    I used Bootstrap Icons for the social icons. You can find a full list of them here: https://icons.getbootstrap.com/

    If you want to add a new social link,
        1. Choose the name of the link. Ex. Instagram
        2. Choose the link to redirect to when clicked. Ex. https://www.instagram.com/ethanthegreat__/
        3. Choose the icon. Only edit bi bi-edit_here. Ex. bi bi-instagram (You NEED to keep the 'bi bi-' format.)
    */
    "social" => [
        "twitter" => [
            "link" => "#twitter",
            "icon" => "bi bi-twitter"
        ],
        "youtube" => [
            "link" => "#youtube",
            "icon" => "bi bi-youtube"
        ],
        "linkedin" => [
            "link" => "#linkedin",
            "icon" => "bi bi-linkedin"
        ],
        "discord" => [
            "link" => "#discord",
            "icon" => "bi bi-discord"
        ],
        "instagram" => [
            "link" => "#instagram",
            "icon" => "bi bi-instagram"
        ],
        "email" => [
            "link" => "#email",
            "icon" => "bi bi-envelope"
        ],
    ]
];
?>