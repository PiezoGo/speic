<body id="Serve">
<?php include "./includes/Navbar.php" ?>
<?php include "./includes/Header.php" ?>
<div class="all">
    <div class="what">
       <span class="What1"></span>
    </div>
    <div class="Service">
        <p>Michael(Piezo), offers a numbers of Sevices depending on your needs.
            He can  <span class="Services"></span></p>
    </div>
</div>
<?php include "./includes/Footer.php" ?>
<script>
    var typedWhat = new Typed(".What1" , {
    strings: ["What do you want?"],
    typeSpeed: 100,
    backSpeed: 100,
})
    var typedWhat = new Typed(".Services" , {
    strings: ["create for you a portfolio website", "create for you an E-commerce website", "create for you a logo"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true
})
</script>


