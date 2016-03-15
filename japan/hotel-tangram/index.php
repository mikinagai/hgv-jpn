<?php include("../../server-side/library.php");?>
    <!doctype html>
    <html>

    <head>
        <meta name="description" content="" />
        <title>ホテルタングラム</title>
        <?php addStyles(); ?>
    </head>

    <body>

        <div class="container">

            <?php addHeader(); ?>

                <div id="subbanner">

                    <div class="container-max">
                        <div id="resorts-options" class="hidden-xs">
                            <ul>
                                <li><a href="#" id="photos-link" class="active">写真</a></li>
                                <!--            <li><a href="#" id="floorplans-link">間取り</a></li>-->
                                <li><a href="#" id="points-link">必要ポイント数</a></li>

                                <li><a href="#" id="map-link">地図</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="homeslideshow">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active" id="slide1" style="background-image: url('img/banner01-s.jpg');"></div>
<!--                                <div class="item" id="slide2" style="background-image: url('img/banner02-s.jpg');"></div>-->
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                    <!-- destinationslideshow -->

                    <div id="floorplan-container">

                        <div class="row">
                            <div class="col-sm-3 text-center">
                                <div class="floorplan">
                                    <p class="small"><img src="floorplans/suites-t.jpg" alt="" /></p>
                                    <p class="large"><img src="floorplans/suites.jpg" alt="" /></p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- floorplan-container -->

                    <div id="points-container">
                        <div class="row">

                            <div class="col-sm-6">

                                <div class="table-responsive">
                                    <table class="table table-hover platinum">
                                        <thead>
                                            <tr>
                                                <th>部屋タイプ</th>
                                                <th>平日/日曜日</th>
                                                <th>土曜日/休前日</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1部屋2名様</td>
                                                <td>1,500</td>
                                                <td>2,000</td>
                                            </tr>
                                            <tr>
                                                <td>1部屋3名様</td>
                                                <td>2,250</td>
                                                <td>3,000</td>
                                            </tr>
                                            <tr>
                                                <td>1部屋4名様</td>
                                                <td>3,000</td>
                                                <td>4,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>ホテルハーヴェストでは、利用人数によって必要なクラブポイント数が決定しますので、予約時にご利用人数が必要になります。また、ご利用人数の変更は、予約の取り直しとなります。
                                        <br> 必要なクラブポイント数、事前の予告無しに変更される可能性があります。交通費や入湯税等その他の費用は、別途お支払いいただく必要があります。予約対象除外日があります。予約は直接クラブカウンセラーに電話にて申し込みください。
                                    </p>
                                </div>

                            </div>

                        </div>
                        <!-- row -->
                    </div>

                    <div id="map-container">
                        <div id="map"></div>
                    </div>


                    <div class="banner-caption resort-title">
                        <h1>ホテルタングラム</h1>
                    </div>

                </div>
                <!-- subbanner -->


                <div id="subtitle">
                    <h2>長野県上水内郡信濃町</h2>
                </div>



                <div id="subcontent" class="content">

                    <div class="row">

                        <div class="col-sm-8 main-column">

                            <h3>概要</h3>
                            <address>長野県上水内郡信濃町古海3575-8</address>
                            <p>〜 霊峰・富士山を一望。大自然を満喫する高原のリゾートホテル 〜 </p>
                            <p>やすらぎの時間をお過ごしいただくホテルは、寛ぐためのスケールと、休むための落ち着き、静けさを用意しています。タングラム斑尾リゾートの中核として、ホテル、レストラン、バンケット、リフレッシュを備えるほか、スキー場センターハウス、ゴルフクラブハウスとしても機能します。</p>

                            <br />

                            <h3>宿泊施設</h3>
                            <ul>
                                <li>スタンダードルーム</li>
                                <li>推奨宿泊人数： 2名様</li>
                                <li>宿泊人数の上限： 4名様</li>
                            </ul>

                            <br />

                            <h3>リゾート設備</h3>
                            <ul>
                                <li>温泉大浴場（露天風呂・ジェット風呂・サウナ）</li>
                                <li>ロミロミサロン</li>
                                <li>ダンススペース</li>
                                <li>スキーロッカータウン内（ 冬季）：スキー場・スノーモビル・託児所</li>
                                <li>タウン内（ 夏季）：ゴルフ場・パターゴルフ・テニス・水辺の広場・トレッキングコース等</li>
                                <li>タウン内（ その他）：屋内温水プール・ゲームコーナー・多目的室・カラオケルーム</li>
                            </ul>

                            <br />



                            <br />

                        </div>
                        <div class="col-sm-4 aside">
                            <h3>追加情報</h3>
                            <p>チェックイン: 3 p.m.
                                <br />チェックアウト: 11 a.m.
                                <br />電話番号: 026-258-3511</p>
                            <p><a href="../../contact/" class="btn btn-secondary">リクエストフォーム</a></p>





                        </div>

                    </div>
                </div>

                <?php addFooter(); ?>

        </div>

        <?php addScripts(); ?>
            <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
            <script type="text/javascript" src="../../js/swipe.js"></script>
            <script type="text/javascript" src="../../js/resorts.js"></script>
            <script type="text/javascript">
                $(document).ready(function(e) {
                    getMap(36.853748, 138.262902, 14);
                });
            </script>

    </body>

    </html>