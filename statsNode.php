<div id="statsoutputnumber">
            <div id= "outputrow" class="row">
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoW Hashrate</p>
                     <p id="statsoutput"><?php echo $powhashrate?> GH/s<br></p>
                  </div>
               </div>
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoW Difficulty</p>
                     <p id="statsoutput"><?php echo $powdifficulty?><br></p>
                  </div>
               </div>
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoW Reward</p>
                     <p id="statsoutput">6.25 SIN<br></p>
                  </div>
               </div>
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoS Hashrate</p>
                     <p id="statsoutput">200.32454 GH/s<br></p>
                  </div>
               </div>
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoS Difficulty</p>
                     <p id="statsoutput">20022.32454<br></p>
                  </div>
               </div>
               <div class="col" id="outputcol">
                  <div id="statsdiv">
                     <p id="ticker">PoS Reward</p>
                     <p id="statsoutput">200.32454 GH/s<br></p>
                  </div>
               </div>
            </div>
         </div>
         <div id="nodestats">
            <div class="row">
               <div class="col">
                  <div id="nodediv">
                     <h1 id="nodehead" class="big">BIG</h1>
                     <div class="table-responsive nodestatsnumber">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="tablehead top">InfinityNodes</th>
                                 <th class="tableoutput"><?php echo $big?></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tablehead paddingtop">Contract Recovery</td>
                                 <td class="tableoutput"><?php echo $recoverybig?> <span style="color: rgb(0,79,255); font-family: 'MADE TOMMY'; font-size: 20px;">Days</span><br></td>
                              </tr>
                              <tr>
                                 <td class="tablehead">APY</td>
                                 <td class="tableoutput percent"><?php echo $apybig?> %<br></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div id="nodediv">
                     <h1 id="nodehead" class="med">MID</h1>
                     <div class="table-responsive nodestatsnumber">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="tablehead">InfinityNodes</th>
                                 <th class="tableoutput"><?php echo $mid?></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tablehead paddingtop">Contract Recovery</td>
                                <td class="tableoutput"><?php echo $recoverymid?> <span style="color: rgb(0,79,255); font-family: 'MADE TOMMY'; font-size: 20px;">Days</span><br></td>
                              </tr>
                              <tr>
                                 <td class="tablehead">APY</td>
                                 <td class="tableoutput percent"><?php echo $apymid?> %<br></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div id="nodediv">
                     <h1 id="nodehead" class="mini">MINI</h1>
                     <div class="table-responsive nodestatsnumber">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="tablehead">InfinityNodes</th>
                                 <th class="tableoutput"><?php echo $mini?></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tablehead paddingtop">Contract Recovery</td>
                                 <td class="tableoutput"><?php echo $recoverymini?> <span style="color: rgb(0,79,255); font-family: 'MADE TOMMY'; font-size: 20px;">Days</span><br></td>
                              </tr>
                              <tr>
                                 <td class="tablehead">APY</td>
                                 <td class="tableoutput percent"><?php echo $apymini?> %<br></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>