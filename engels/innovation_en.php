<?php 
if (!isset($basePath)) {
    $basePath = '..';
}
include("../engels/header_en.php"); ?>
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
        <h2>Innovation</h2>
        <p>
            Explore the cutting-edge projects and advancements at KLM E&M.<br> Innovation is at the core of everything we do, 
            from sustainable aviation fuel to the latest in drone maintenance and 3D printing.
        </p>

        <div class="style-47">
            <div class="style-48">
                <img alt="image" src="../images/flaneer_sustainable.jpg" class="style-49" />
                <div class="style-50">
                    <h1 class="style-51">
                        <span class="style-52">Innovation projects at KLM E&amp;M:</span>
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
            <p>At KLM E&M, drones are used to inspect aircraft faster and with greater precision.
                Thanks to advanced software and sensors, damage can be detected automatically saving time and increasing safety.
                It’s just one of the many ways we innovate to keep our fleet in top condition.
            </p>
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
            <p>This video shows the full engine overhaul process at KLM E&M.
                Each engine is disassembled, thoroughly inspected, repaired or replaced where needed and finally tested again to meet the highest safety standards.
                A precise and meticulous process all to keep our engines performing at their best.
            </p>
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
            <p>This video shows how technology, like AR glasses, smart tools, and data analysis is transforming the maintenance process in KLM E&M’s hangars.
                By combining human expertise with smart innovations, we achieve faster turnaround times and reduce the chance of errors.
                A perfect example of how we work smarter, not just harder.
            </p>
        </div>
    </div>
</div>
</div>

</section>
</main>
<?php include("../engels/footer_en.php"); ?>
</body>
</html>