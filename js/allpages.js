$(function () {
    //Load Home Page
    $("main").load("pages/home.php");
    //Navbar Brand Anchor
    $("a.navbar-brand").click(function (e) { 
        e.preventDefault();
        $("main").load("pages/home.php");
    });
});