<?php 
if (!isset($basePath)) {
    $basePath = '..';
}
include("../nederlands/header_nl.php"); ?>
<main>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 32px;
            display: flex;
            flex-direction: column;
            gap: 48px;
        }

        .video-info-block {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 32px;
            background: white;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .video-info-block iframe {
            width: 500px;
            height: 280px;
            border: none;
            border-radius: 8px;
        }

        .info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info h3 {
            color: #003145;
            margin-bottom: 16px;
        }

        .info p {
            color: #595959;
            font-size: 16px;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .video-info-block {
                flex-direction: column;
                align-items: center;
                width: 70vw !important;
                margin-left: -45px !important;
            }

            .video-info-block iframe {
                width: 100%;
                height: auto;
            }

            .info {
                text-align: center;
            }
        }
    </style>
</head>







<link rel="stylesheet" href="../css/style.css">

    <section class="innovation-section">
        <h2>Innovatie</h2>
        <p>
            Ontdek de toonaangevende projecten en innovaties bij KLM E&M.<br> Innovatie staat centraal in alles wat we doen, 
            van duurzame vliegtuigbrandstof tot de nieuwste ontwikkelingen in drone Maintenance en 3D-printing.
        </p>

        <div class="style-47">
            <div class="style-48">
                <img alt="image" src="../images/flaneer_sustainable.jpg" class="style-49" />
                <div class="style-50">
                    <h1 class="style-51">
                        <span class="style-52">Innovatie projecten bij KLM E&amp;M:</span>
                    </h1>
                    <div class="style-53">
                        <span class="style-54">
                            <ul class="style-55">
                                <li class="style-56">
                                    <a href="https://www.klm.nl/information/sustainability/saf" class="style-57">100% SAF</a>
                                </li>
                                
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
    <!-- Eerste blok -->
    <div class="video-info-block">
        <iframe src="https://www.youtube.com/embed/EzIhYaFMCjY?si=HMX8DJNSb2P2_thm"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
        </iframe>
        <div class="info">
            <h3>Drone Maintenance</h3>
            <p>Bij KLM E&M worden drones gebruikt om vliegtuigen sneller en nauwkeuriger te inspecteren. Dankzij geavanceerde software en sensoren kunnen schadeplekken automatisch worden gedetecteerd, wat zorgt voor tijdsbesparing en verhoogde veiligheid. </p>
        </div>
    </div>

    <!-- Tweede blok -->
    <div class="video-info-block">
        <iframe src="https://www.youtube.com/embed/2D_QtBWzk9M?si=OZSDMnCgaZvj1CQJ"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
        </iframe>
        <div class="info">
            <h3>Engine Overhaul</h3>
            <p>In deze video zie je het volledige proces van motorrevisie bij KLM E&M. Elke motor wordt gedemonteerd, grondig gecontroleerd, gerepareerd of vervangen waar nodig, en uiteindelijk opnieuw getest om te voldoen aan de strengste veiligheidsnormen.</p>
        </div>
    </div>

    <!-- Derde blok -->
    <div class="video-info-block">
        <iframe src="https://www.youtube.com/embed/-9daqK1gE4I?si=2IkvoMnNtl8KCTw5"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
        </iframe>
        <div class="info">
            <h3>Innovatie in de Hangar</h3>
            <p>Deze video laat zien hoe technologie – zoals AR-brillen, slimme tools en data-analyse – het onderhoudsproces in de hangars van KLM E&M verbetert. De combinatie van mens en technologie zorgt voor snellere doorlooptijden en minder fouten.
            </p>
        </div>
    </div>
</div>
</div>

</section>
</main>
<?php include("../nederlands/footer_nl.php"); ?>
</body>
</html>