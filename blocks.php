<?php  include 'header.php' ?>

<style>
.dflex {
    flex-direction: column;
}

table tr:last-child td:first-child {
    border-radius: 8px 0px 0px 8px;
}

table tr:last-child td:last-child {
    border-radius: 8px 0px 0px 8px;
}
</style>


<div class="col-md-12 transactionTop">
    <img style="width:50px; height:50px;" class="transaction" src="assets/img/explorer-icon-white%202.svg" />
    <p class="transactionId">BLOCKHASH</p>
    <p class="transactionHash">7ccadf3ea47a97d206c955102dd9acb31c78dfc2c744d74b88aae0bfedcab027</p>
    <p style="margin-top:5px;" class="transactionId">BLOCKHEIGHT</p>
    <p class="transactionHash">10,000,000</p>
    <?php  include 'statsBlocks.php' ?>
    <img style="display: block;margin-top: 24px; margin-bottom:45px;" src="/assets/img/hrtransactions.svg" />
</div>
<div style="margin:auto; max-width:1500px" class="col-md-12">
    <H1 style="margin-bottom:40px;" class="blockTransactions">TRANSACTIONS</H1>

    <table class=latestblocks style="width:1500px; margin-left:0px">
        <thead class="latestblocks">
            <tr>
                <th class="hash blockth">HASH</th>
                <th class="size blockth">SIZE</th>
                <th class="reci blockth">RECIPIENTS</th>
                <th class="amount blockth">AMOUNT</th>
                <th class="time blockth">TIMESTAMP</th>

            </tr>
        </thead>
        <tbody class="tbodyMargin tbodyback">
            <tr>
                <td class="blockOutput blockout"> <a href="/transactions.php">
                        a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b</a></td>
                <td class="sizeOutput blockout">
                    1.245 kB
                </td>
                <td class="reciOutput blockout">12</td>
                <td class="amountOutput blockout ">
                    1,000,000 SIN
                </td>
                <td class="timeOutput blockout">
                    2021/01/01 00:00:00
                </td>
            </tr>
        </tbody>
        <tbody class="">
            <tr>
                <td class="blockOutput blockout"> <a href="/transactions.php">
                        a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b</a></td>
                <td class="sizeOutput blockout">
                    1.245 kB
                </td>
                <td class="reciOutput blockout">12</td>
                <td class="amountOutput blockout ">
                    1,000,000 SIN
                </td>
                <td class="timeOutput blockout">
                    2021/01/01 00:00:00
                </td>
            </tr>
        </tbody>
        <tbody class="tbodyback">
            <tr>
                <td class="blockOutput blockout"> <a href="/transactions.php">
                        a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b</a></td>
                <td class="sizeOutput blockout">
                    1.245 kB
                </td>
                <td class="reciOutput blockout">12</td>
                <td class="amountOutput blockout ">
                    1,000,000 SIN
                </td>
                <td class="timeOutput blockout">
                    2021/01/01 00:00:00
                </td>
            </tr>
        </tbody>
        <tbody class="">
            <tr>
                <td class="blockOutput blockout"> <a href="/transactions.php">
                        a832277dbfbf1c4a5c07f7c3bdd1788bc140677b3860bdf50b5c9e9ad514269b</a></td>
                <td class="sizeOutput blockout">
                    1.245 kB
                </td>
                <td class="reciOutput blockout">12</td>
                <td class="amountOutput blockout ">
                    1,000,000 SIN
                </td>
                <td class="timeOutput blockout">
                    2021/01/01 00:00:00
                </td>
            </tr>
        </tbody>
    </table>
</div>