<?php include '../includes/header.php';?>
<?php include '../includes/nav.php';?>
    <section class="section">
      <div class="container">
        <div class="content">
          <h1>mkopochapchap loan base calculator</h1>
          <p>
            The Simple Loan Calculator will determine your estimated payments
            for loan amounts, interest rates and terms.
          </p>
        </div>
<div class="container">
  <!-- RESULTS -->
  <section class="section"> 
      <h1 class="title ">Calculated Results</h1>
<div class="columns is-multiline">
  
  <div class="column is-12-tablet is-6-desktop is-3-widescreen">
    <div class="notification is-primary has-text">
      <p id="monthlyPayment" class="title is-1">$</p>
      <p class="subtitle is-4">Monthly Payments</p>
    </div>
  </div>

    <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-info has-text">
          <p id="totalInterest" class="title is-1">%</p>
          <p class="subtitle is-4">Total Interest</p>
        </div>
      </div>

      <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-link has-text">
          <p id="totalPayment" class="title is-1">$</p>
          <p class="subtitle is-4">Total Amount</p>
        </div>
      </div>

</div>
</section>
</div>
        <div class="columns">
          <div class="column is-three-quarters">
            <div class="card">
              <div class="card-content">
                <form id="loan-form">
                  <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">1</p>
                        Loan Amount
                      </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-left ">
                            <input class="input" id="amount" type="number" />
                            <span class="icon is-small is-left">
                              <i class="fa fa-dollar-sign"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">2</p>
                        Interest Rate
                      </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-right">
                            <input class="input" id="interest" type="number" />
                            <span class="icon is-small is-right">
                              <i class="fa fa-percentage"></i>
                              
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">3</p>
                        Number Of Years
                      </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-left">
                            <input class="input" id="years" type="number" />
                            <span class="icon is-small is-left">
                              <i class="fa fa-calendar"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="control">
                    <button
                      class="button is-large is-fullwidth is-primary is-outlined"
                    >
                      Calculate
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

  </body>
<script src="./assets/js/app.js"></script>
</html>
