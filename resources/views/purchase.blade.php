<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Purchase Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/css/purchase.css">
</head>
<body>
<div class="wrapper" id="app">
    <div class="card-form">
      <div class="card-list">
        <div class="card-item">
          <div class="card-item__side -front">
            <div class="card-item__focus" ref="focusElement"></div>
            <div class="card-item__cover">
              <img src="/images/cardcredit.jpg" class="card-item__bg">
            </div>
            <div class="card-item__wrapper">
              <div class="card-item__top">
                <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png" class="card-item__chip">
                <div class="card-item__type">
                 
                </div>
              </div>
              <label for="cardNumber" class="card-item__number" ref="cardNumber">
              
              </label>
              <div class="card-item__content">
                <label for="cardName" class="card-item__info" ref="cardName">
                  <div class="card-item__holder">Card Holder</div>
                  <div class="card-item__name">Full Name</div>
                </label>
                <div class="card-item__date" ref="cardDate">
                  <label for="cardMonth" class="card-item__dateTitle">Expires</label>
                  <div class="card-item__dateItem">MM</div>
                  
                  <div class="card-item__dateItem">YY</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-item__side -back">
            <div class="card-item__cover">
              <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/default.jpeg" class="card-item__bg">
            </div>
            <div class="card-item__band"></div>
            <div class="card-item__cvv">
                <div class="card-item__cvvTitle">CVV</div>
                <div class="card-item__cvvBand">
                  <span>*</span>
                  <span>*</span>
                  <span>*</span>
                  <span>*</span>
              </div>
                <div class="card-item__type">
                    
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-form__inner">
        <div class="card-input">
          <label for="cardNumber" class="card-input__label">Card Number</label>
          <input type="text" id="cardNumber" class="card-input__input" name="cardNumber" autocomplete="off">
        </div>
        <div class="card-input">
          <label for="cardName" class="card-input__label">Card Holder</label>
          <input type="text" id="cardName" class="card-input__input" name="cardName" autocomplete="off">
        </div>
        <div class="card-form__row">
          <div class="card-form__col">
            <div class="card-form__group">
              <label for="cardMonth" class="card-input__label">Expiration Date</label>
              <select class="card-input__input -select" id="cardMonth" name="cardMonth">
                <option value="" disabled selected>Month</option>
                <?php for ($i = 1; $i <= 12; $i++): ?>
                  <option value="<?php echo $i < 10 ? '0' . $i : $i; ?>"><?php echo $i < 10 ? '0' . $i : $i; ?></option>
                <?php endfor; ?>
              </select>
              <select class="card-input__input -select" id="cardYear" name="cardYear">
                <option value="" disabled selected>Year</option>
                <?php $currentYear = date('Y'); ?>
                <?php for ($i = $currentYear; $i <= $currentYear + 10; $i++): ?>
                  <option value="<?php echo substr($i, 2, 2); ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
          <div class="card-form__col -cvv">
            <div class="card-input">
              <label for="cardCvv" class="card-input__label">CVV</label>
              <input type="text" id="cardCvv" class="card-input__input" name="cardCvv" autocomplete="off">
            </div>
          </div>
        </div>
        <button class="card-form__button">Submit</button>
      </div>
    </div>
  </div>


</body>
</html>
