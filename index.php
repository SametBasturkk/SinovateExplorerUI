<?php
$mc = new Memcached(); $mc->addServer("localhost", 11211);
$getmininginfo = $mc->get("pow"); $powhashrate = substr(($getmininginfo['networkhashps'] / 1000000000), 0, 6); $powdifficulty = substr($getmininginfo['difficulty'], 0, 6);
$lastblock = $mc->get("lastblock"); $lastblock = json_decode($lastblock, TRUE);$blockheight = $lastblock['_id'];
$supply = number_format($lastblock['supplyInCurrentBlock']);
$big = $lastblock['nodesStats']['numberOfBigInBlock'];$mid = $lastblock['nodesStats']['numberOfMidInBlock'];$mini = $lastblock['nodesStats']['numberOfMiniInBlock'];$sumofnodes = $big+$mid+$mini;
$apybig = $lastblock['nodesStats']['BigAnnualIncomeIn%']-100;$apymid = $lastblock['nodesStats']['midAnnualIncomeIn%']-100;$apymini = $lastblock['nodesStats']['miniAnnualIncomeIn%']-100;
$burnednodes = number_format($mc->get("burnednodes"));
$totalburned = $mc->get("totalburned"); $burnedfees = number_format($totalburned - $mc->get("burnednodes"));
$recoverybig = intval(1000000/((720/$big)*1752)); $recoverymid = intval(500000/((720/$mid)*838)); $recoverymini = intval(100000/((720/$mini)*560));
$last6tx=json_decode($mc->get("last6tx"), TRUE); $last6burned=json_decode($mc->get("last6burned"), TRUE);
$latestblocks=json_decode($mc->get("latestblocks"), TRUE); //print_r($latestblocks);

?>

<?php  include 'header.php' ?>
<div id="mainsection">


    <div class="col-xl-12 backgroundGradient ">
        <div class="row" style="flex-wrap: nowrap; --bs-gutter-x:0">
            <div class="col-md-6" style="margin-top: 37px;margin-left: 84px;">
                <div class="sync">
                    <span class="dot"></span>
                    <p class="syncP">Synchronized</p>
                </div>
                <img style="display: block;margin-top: 24px;" src="/assets/img/hr.svg" />
                <h1 class="mainneth1">SINOVATE Mainnet Explorer</h1>
                <input type="text" class="search-field marginButton" placeholder="Enter Address, BlockHash ..." />
                <div class="priceTable">

                    <table class="table table-sm table-transparent tableWidth">
                        <tbody>
                            <tr class="priceTable">
                                <th scope="row">Price</th>
                                <td>100,654458 USD</td>
                            </tr>
                            <tr class="priceTable">
                                <th scope="row">Marketcap</th>
                                <td>2,100,100,000,000 USD</td>
                            </tr>
                            <tr class="priceTable">
                                <th scope="row">24H Volume</th>
                                <td>2,000,000,000 USD</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-6 ">
                <div class="backgroundBlack">
                    <row>
                        <div class="statsNode">
                            <div class="col-md-3 flexDiv">
                                <img class="nodeImg" src="/assets/img/biglogo-light 1.svg" />
                                <p class="nodeType">380 BIG</p>
                                <p class="nodeOutput"> 20.04 %</p>
                            </div>
                            <div class="col-md-3 flexDiv">
                                <img class="nodeImg" src="/assets/img/biglogo-light 1.svg" />
                                <p class="nodeType">380 BIG</p>
                                <p class="nodeOutput"> 20.04 %</p>
                            </div>
                            <div class="col-md-3 flexDiv">
                                <img class="nodeImg" src="/assets/img/biglogo-light 1.svg" />
                                <p class="nodeType">380 BIG</p>
                                <p class="nodeOutput"> 20.04 %</p>
                            </div>

                        </div>

                        <button class="buildNode"><img class=buildImg src="/assets/img/InfinityNodes_NEW 1.svg" />BUILD
                            AN INFINITYNODE</button>
                </div>
                <div class="flexRight">
                    <div class="flexRight align">
                        <img class="rightStatsImg" src="/assets/img/pow.svg" />
                        <p class="rightStats">340.0192 GH/s</p>
                    </div>
                    <div class="flexRight align">
                        <img class="rightStatsImg" src="/assets/img/coin.svg" />
                        <p class="rightStats">2,000,000,000 SIN</p>
                    </div>
                </div>
                </row>
            </div>

        </div>
        <?php  include 'stats.php' ?>

    </div>
</div>

<div id="mainsectiontwo">
    <div id="sectionleft">
        <h1 class="sidebarhead">LATEST BLOCKS<br></h1>
        <?php foreach ($latestblocks as $lbarr) :?>
        <table style="max-width:250px; " class="table tableblocks">
            <tr>
                <td style="width: fit-content;">
                    <div class="text-center">
                        <img src="assets/img/coin.svg" style="height:21px;"><br>
                        <p class=winner winner<?php echo $lbarr[ '_id'];?>
                            style="margin-bottom:0; font-size:15px; font-weight:500; color:white !important; font-family:'MADE TOMMY';">
                            <?php echo gmdate("i:s",time()-$lbarr['blockTime']);?>
                        </p>
                    </div>
                </td>
                <td class="align-middle text-white" style="max-width:150px; padding-right:25px;">
                    <p class=blockstext
                        style="font-size:15px; font-weight:500; color:white !important; font-family:'MADE TOMMY';">
                        <?php echo ($lbarr['blockCreatorType']=='pow')?"Proof-Of-Work":"Proof-Of-Stake";?><br><a
                            href="/blocks.php"><span class=height
                                style="font-size:10px !important; color:#868686 !important">Height</span><span
                                class=heightnumber
                                style="float:right; font-size:12px; color:#004FFF; font-weight:500; text-decoration:underline;"><?php echo $lbarr['_id'];?></span></a><br>
                        <span class=size style="font-size:10px !important; color:#868686 !important">Size</span><span
                            class=sizenumber
                            style="float:right; font-size:12px; color:white; font-weight:500;"><?php echo $lbarr['size'];?>
                            kB</span><br>
                        <span class=txs style="font-size:10px !important; color:#868686 !important">TXs</span>
                        <span class=txs style="float:right; font-size:12px; color:white; font-weight:500;">
                            <?php echo $lbarr['txs'];?>
                        </span>
                    </p>
                </td>
            </tr>
        </table>
        <?php endforeach;?>
    </div>
    <div id="sectionright" class="lasttransaction">
        <div class="divTransactions">
            <h1 id="latesttransactions" class="sidebarhead transactions">LATEST TRANSACTIONS<br></h1>
            <?php foreach ($last6tx as $txarr) :?>
            <table class=transactions style="width:100%;">
                <thead class="blockshead">
                    <tr>
                        <th class="trHead">Date</th>
                        <th class="trHead">Block</th>
                        <th class="trHead">Transaction Hash</th>
                        <th class="trHead">Amount</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="date">
                            2021/01/01 00:00:00
                        </td>
                        <td class="sinoutput">
                            1,000,000
                        </td>
                        <td class="sinoutput hashTransaction"> <a href="/transactions.php">
                                a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b</a></td>
                        <td class="sinoutput amountSIN">
                            1,000,000 SIN
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php endforeach;?>
            <button class="buildNode showMore">SHOW MORE</button>
        </div>
        <div class="divTransactions contracts">
            <h1 id="latesttransactions" class="sidebarhead transactions">LATEST INFINITYNODE STATUS (1)<br></h1>
            <table class=transactions style="width:100%;">
                <thead class="blockshead">
                    <tr>
                        <th class="trHead"></th>
                        <th class="trHead">Date</th>
                        <th class="trHead">Transaction Hash</th>
                        <th class="trHead">Tier</th>
                        <th class="trHead">Payee Address</th>
                        <th class="trHead">Amount</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="date">
                            <p class="statuscontractp">COMMIT</p>
                        </td>
                        <td class="sinoutput">
                            2021/01/01 00:00:00
                        </td>
                        <td class="sinoutput hashTransaction">
                            ca6118756733b7145cd724817e6c20b55...
                        </td>
                        <td class="sinoutput amountSIN">
                            BIG
                        </td>
                        <td class="sinoutput hashTransaction">
                            ca6118756733b7145cd724817e6c20b55...
                        </td>
                        <td class="sinoutput amountSIN">
                            1,000,000 SIN
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="bottomInfinity">
                <p class="bottomText">(1) ENABLED and NOT ENABLED status are displayed with ade lay of 55 blocks from
                    the current blockheight. </p>
                <button class="buildNode showMore">SHOW MORE</button>
            </div>
        </div>
        <div>
        </div>
    </div>
    <?php  include 'footer.php' ?>


    </html>