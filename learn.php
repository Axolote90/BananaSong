<!-- learn.html -->
<?php
session_start();
?>

<style>
    .left-box {
        width: 50%;
    }
    .level-button {

        cursor: pointer;
    }
</style>
<div class="left-box">
        <div class="statistics">
            <div class="stat-row">
                <div class="stat">
                    <i class="fas fa-heart"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['vidas']) ? $_SESSION['vidas'] : '0000'; ?></span>
                </div>
                <div class="stat">
                    <i class="fas fa-fire"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['racha']) ? $_SESSION['racha'] : '0000'; ?></span>
                </div>
                <div class="stat">
                    <i class="fas fa-diamond"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['gemas']) ? $_SESSION['gemas'] : '0000'; ?></span>
                </div>
            </div>
            <div class="classification">
                <span class="classification-label">Estas en el <br> puesto #<?php echo isset($_SESSION['clasificacion']) ? $_SESSION['clasificacion'] : '0'; ?></span>
                <i class="fas fa-shield-alt"></i>
            </div>
        </div>
    </div>
    <div class="center-container">
        <!-- Botones de niveles -->
        <a href="lesson/lesson-1.html" class="level-button" style="top: 50px; left: 50%;"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="lesson/lesson-2.html" class="level-button" style="top: 100px; left: 55%;"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="lesson/lesson-3.html" class="level-button" style="top: 150px; left: 45%;"><i class="fa fa-star" aria-hidden="true"></i></a>
        <a href="lesson/lesson-4.html" class="level-button" style="top: 200px; left: 55%;"><i class="fa fa-star" aria-hidden="true"></i></a>
        
        <!-- Añade más botones según sea necesario -->
    </div>