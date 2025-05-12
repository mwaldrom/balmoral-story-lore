<header id="top">
    <nav>
        <div class="nav-wrapper blue-grey lighten-4">
            <div class="container">
                <a href="../index.php" class="brand-logo"><img class="circle " src="../apple-touch-icon-57x57.png" alt="Balmoral Family Crest" style="width:50px;height: 50px; padding-top: 10px;"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger grey-text text-darken-1" href="#!" data-target="dropdown1">Core<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger grey-text text-darken-1" href="#!" data-target="dropdown2">Base<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger grey-text text-darken-1" href="#!" data-target="dropdown3">Lorem<i class="material-icons right">arrow_drop_down</i></a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger grey-text text-darken-1" href="#!" data-target="dropdown4">Other's<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="../aboutus.php">About Us</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="../core/core-index.php">Core Index</a></li>
        <li><a href="../core/dice-notation.php">Dice Notation</a></li>
        <li><a href="../core/date.php">Date System</a></li>
        <li><a href="../core/time.php">Time System</a></li>
        <li><a href="../core/measure.php">Measure System</a></li>
        <li><a href="../core/currency.php">Currency System</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="../base/base-index.php">Core Index</a></li>
        <li><a href="core-mechanics.php">Core Mechanics Overview</a></li>
        <li><a href="character-design.php">Character Design Framework</a></li>
        <li><a href="cosmos-framework.php">Cosmos Framework</a></li>
        <li><a href="combat.php">Combat & Conflict</a></li>
        <li><a href="advancement.php">Advancement, Quests & Rewards</a></li>
        <li><a href="narrative-integration.php">Narrative & Novel Writing Integration</a></li>
        <li><a href="cross-system.php">Cross-System Compatibility</a></li>
        <li><a href="tone-safety.php">Tone & Safety</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown3" class="dropdown-content">
        <li><a href="../underconstruction.php">Lorem Index</a></li>

    </ul>      

    <!-- Dropdown Structure -->
    <ul id="dropdown4" class="dropdown-content">
        <li><a href="../underconstruction.php">Other's Index</a></li>
    </ul>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../core/core-index.php">Core Index</a></li>
        <li><a href="../base/base-index.php">Core Index</a></li>
        <li><a href="../underconstruction.php">Lorem Index</a></li>
        <li><a href="../underconstruction.php">Other's Index</a></li>
        <li><a href="../tou.php">T&C / PP</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../contact.php">Contact Us</a></li>
    </ul>

    <section class="blue-grey lighten-3">
        <h1 class="center-align">
            <?php
            echo $long_title;
            ?>
        </h1>
        <h5 class="center-align blerb">
            <?php
            echo $page_blerb;
            ?>
        </h5>
    </section>

</header>