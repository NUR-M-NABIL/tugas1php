<?php
$nama="Nur Muhamad Nabil";
$daerah="Bogor";
$email="nurmuhamadnabil@email.com";
$notelp="085894295052";
$kampus="STT Terpadu Nurul Fikri";
$ig="nur_m_nabil.15";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Biodata</title>
</head>
<body bgcolor="indigo">
   
    <h1 align="center">
        <marquee behavior="" direction="right"  scrolldelay="100">
        MSIB 6 - Grup3 Akademi Fullstack Web Developer
        </marquee>
    </h1>
   

    <fieldset>

        <legend align="center">
            <font size="25" color="blue" face="times new roman">
                About ME
            </font>
        </legend>
       
    <p align="justify">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm5IXHJbHaCSFKsh99LeFPNf4oczVEa23w-pM_YgFvkiETpJ97jYOFKTk8EGmHDMcPTDw&usqp=CAU"
         alt="" width="15%" align="left" hspace="10" >
        Assalamualaikum Warahmatullahi Wabarakaatuh.
        Salam kenal perkenalkan nama saya <?php echo $nama ?> berasal dari daerah <?php echo $daerah ?>. 
        Saya dari kampus <?php echo $kampus ?> Depok dan sekarang sedang mengambil studi independen di Mitra NF Com kelas Akademi Fullstack Web Developer.
    </p>

    <p align="left">
        Alasan saya mengambil kelas ini untuk memahami kembali serta mempraktekkan kembali pemrograman dasar hingga Framework Laravel dikarenakan di Matkul kuliahnya belum bisa memahami dan mempraktekkan pemrograman yang telah diajarkan dengan benar. 
        Bagi saya cukup terlalu cepat materi yang diajarkan bagi saya yang dapat memahami suatu pelajaran secara perlahan dan tidak terlalu terburu juga banyak yang diskip bagian yang mudah terlihat sepele diajarkan tapi bagi saya itu penting.
    </p>

    <p align="left">
        Cita - cita saya selain ingin bisa menguasai bahasa pemrograman dan juga membuat aplikasi web, saya ingin sekali mengkhususkan saya di bidang programmer backend dan juga menjadi ahli di bidang tersebut. 
        Harapannya setelah saya belajar 1 semester penuh ini bisa memahami dan menjalankan framework laravel sebagai modal awal melangkah mendalami perograman backend lainnya dan dapat menyelesaikan project akhir yang diberikan nanti dengan usaha saya agar juga dapat dijadikan sebagai portofolio saya di CV saya. 
        Demikian yang saya sampaikan terima kasih. 
        Wassalamualaikum Warahmatullahi Wabarakaatuh.
    </p>

    <font size="5" color="orange" face="times new roman">
        Hal Lainnya tentang SAYA
    </font>

    <p>NO. TELP  = <?php echo $notelp ?></p>
    <p>GMAIL     = <?php echo $email ?></p>
    <p>INSTAGRAM = <?php echo $ig ?> </p>

    <ol type="number">
        <li>pedidikan</li>
        <ul type="square">
            <li>RA Al Madinah</li>
            <li>MI Nurul Qolbi</li>
            <li>MTS Qotrun Nada</li>
            <li>SMK PGRI 1 Depok</li>
            <li>STT Terpadu Nurul Fikri</li>
        </ul>
        <li>hobby</li>
        <ul type="square">
            <li>Pencak Silat</li>
            <li>Badminton</li>
            <li>Joging</li>
            <li>Menonton Youtube (kalo senggang)</li>
            <li>Disuruh emak belanja</li>
        </ul>
        <li>menu favorit yang diutamakan</li>
        <ul type="square">
            <li>Makanan</li>
            <ol type="disc">
                <li>Nasi putih (wajibun)</li>
                <li>Apapun olahan dari kentang</li>
                <li>Apapun yang menggunakan sambal kacang</li>
                <li>Ubi goreng</li>
                <li>Mi Ayam,kwetiau dan Nasi Goreng</li>
                <li>Ayam semur</li>
                <li>Roti Aoka</li>
            </ol>
            <li>Minuman</li>
            <ol type="disc">
                <li>air putih mineral (wajibun)</li>
                <li>Jus jambu merah</li>
                <li>Es teh rasa apel</li>
                <li>Energen</li>
                <li>sirup (hampir gak pernah karena ada keturunan diabet)</li>
            </ol>
        </ul>
        <li>Film Favorit</li>
        <ul type="square">
            <li>Fetih 1453</li>
            <li>X-MEN Series</li>
            <li>Kamen rider Era heisei phase 1 & 2</li>
            <li>Ultraman era Heisei & New Generation</li>
            <li>Koe No Katachi</li>
            <li>99 cahaya dilangit eropa</li>
        </ul>
    </ol>

    </fieldset>
    
</body>
</html>