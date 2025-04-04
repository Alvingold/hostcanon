<style>
  :root {
      --primary-color: #4B0082;
      --secondary-color: #6A0DAD;
      --accent-color: #9370DB;
      --text-light: #FFFFFF;
      --text-dark: #333333;
      --section-padding: 80px 0;
  }

  /* Container styling */
  .currency-selector {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  /* Label styling */
  .currency-selector label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--primary-color);
  }

  /* Select styling */
  .currency-selector select {
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
      background-color: #fff;
      font-size: 16px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 14 14'%3E%3Cpath fill='%23333' d='M7 10l5-5H2z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 15px center;
      background-size: 12px;
      transition: border-color 0.3s;
  }

  .currency-selector select:focus {
      outline: none;
      border-color: var(--primary-color);
      box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
  }

  /* Optgroup styling for organization */
  .currency-selector optgroup {
      font-weight: bold;
      font-style: normal;
      color: #4a90e2;
      background-color: #f8f9fa;
  }

  /* Option styling */
  .currency-selector option {
      padding: 10px;
      background-color: var(--primary-color);
      color: white;
  }

  /* Current selection message */
  .currency-selector p {
      margin-top: 16px;
      font-size: 14px;
      color: var(--primary-color);
  }

  #selected-currency {
      font-weight: 700;
      color: #4a90e2;
  }
</style>

<div class="currency-selector" data-aos="fade-up" data-aos-delay="100">
    <label for="currency-selector">Select your currency: </label>
    <select id="currency-selector">
      <!-- Africa -->
      <option value="EGP">Egyptian Pound (EGP)</option>
      <option value="GHS">Ghanaian Cedi (GHS)</option>
      <option value="KES">Kenyan Shilling (KES)</option>
      <option value="NGN">Nigerian Naira (NGN)</option>
      <option value="ZAR">South African Rand (ZAR)</option>
      <option value="TZS">Tanzanian Shilling (TZS)</option>
      <option value="UGX">Ugandan Shilling (UGX)</option>
      <option value="XAF">CFA Franc BEAC (XAF)</option>
      <option value="XOF">CFA Franc BCEAO (XOF)</option>
      <option value="ETB">Ethiopian Birr (ETB)</option>
      
      <!-- Americas -->
      <option value="ARS">Argentine Peso (ARS)</option>
      <option value="BRL">Brazilian Real (BRL)</option>
      <option value="CAD">Canadian Dollar (CAD)</option>
      <option value="CLP">Chilean Peso (CLP)</option>
      <option value="COP">Colombian Peso (COP)</option>
      <option value="MXN">Mexican Peso (MXN)</option>
      <option value="PEN">Peruvian Sol (PEN)</option>
      <option value="USD">US Dollar (USD)</option>
      
      <!-- Asia & Pacific -->
      <option value="AUD">Australian Dollar (AUD)</option>
      <option value="BDT">Bangladeshi Taka (BDT)</option>
      <option value="CNY">Chinese Yuan (CNY)</option>
      <option value="HKD">Hong Kong Dollar (HKD)</option>
      <option value="INR">Indian Rupee (INR)</option>
      <option value="IDR">Indonesian Rupiah (IDR)</option>
      <option value="JPY">Japanese Yen (JPY)</option>
      <option value="KZT">Kazakhstani Tenge (KZT)</option>
      <option value="MYR">Malaysian Ringgit (MYR)</option>
      <option value="NZD">New Zealand Dollar (NZD)</option>
      <option value="PKR">Pakistani Rupee (PKR)</option>
      <option value="PHP">Philippine Peso (PHP)</option>
      <option value="SGD">Singapore Dollar (SGD)</option>
      <option value="KRW">South Korean Won (KRW)</option>
      <option value="LKR">Sri Lankan Rupee (LKR)</option>
      <option value="THB">Thai Baht (THB)</option>
      <option value="VND">Vietnamese Dong (VND)</option>
      
      <!-- Europe -->
      <option value="EUR">Euro (EUR)</option>
      <option value="BGN">Bulgarian Lev (BGN)</option>
      <option value="HRK">Croatian Kuna (HRK)</option>
      <option value="CZK">Czech Koruna (CZK)</option>
      <option value="DKK">Danish Krone (DKK)</option>
      <option value="HUF">Hungarian Forint (HUF)</option>
      <option value="ISK">Icelandic Krona (ISK)</option>
      <option value="NOK">Norwegian Krone (NOK)</option>
      <option value="PLN">Polish Zloty (PLN)</option>
      <option value="RON">Romanian Leu (RON)</option>
      <option value="RUB">Russian Ruble (RUB)</option>
      <option value="SEK">Swedish Krona (SEK)</option>
      <option value="CHF">Swiss Franc (CHF)</option>
      <option value="TRY">Turkish Lira (TRY)</option>
      <option value="GBP">British Pound (GBP)</option>
      <option value="UAH">Ukrainian Hryvnia (UAH)</option>
      
      <!-- Middle East -->
      <option value="BHD">Bahraini Dinar (BHD)</option>
      <option value="ILS">Israeli Shekel (ILS)</option>
      <option value="JOD">Jordanian Dinar (JOD)</option>
      <option value="KWD">Kuwaiti Dinar (KWD)</option>
      <option value="OMR">Omani Rial (OMR)</option>
      <option value="QAR">Qatari Riyal (QAR)</option>
      <option value="SAR">Saudi Riyal (SAR)</option>
      <option value="AED">UAE Dirham (AED)</option>
    </select>
    <p>Showing prices in <span id="selected-currency">USD</span></p>
</div>

<script>
  // Replace the static exchangeRates object with this variable declaration
  let exchangeRates = {};

  // Add this function to fetch real-time exchange rates
  async function fetchExchangeRates() {
      try {
          // Replace with your API endpoint and API key
          const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
          const data = await response.json();

          // Update the rates in your application
          exchangeRates = data.rates;

          // Update displayed prices with new rates
          const currentCurrency = document.getElementById('currency-selector').value;
          updatePrices(currentCurrency);

      } catch (error) {
          console.error('Error fetching exchange rates:', error);
          // Fallback to some default rates if the API call fails
      }
  }

  // Then in your existing DOMContentLoaded event listener, add the call to fetchExchangeRates:
  document.addEventListener('DOMContentLoaded', function() {
      // Create currency selection dropdown
      const currencySelector = document.getElementById('currency-selector');

      if (currencySelector) {
          // Add event listener for currency changes
          currencySelector.addEventListener('change', function() {
              updatePrices(this.value);
          });
      }

      // Fetch real-time exchange rates
      fetchExchangeRates();

      // If you also want to keep the user currency detection:
      // detectUserCurrency();
  });

  // Currency symbols and formatting options
  const currencyFormats = {
      USD: {
          symbol: '$',
          position: 'before',
          decimalPlaces: 2
      },
      EUR: {
          symbol: '€',
          position: 'after',
          decimalPlaces: 2
      },
      GBP: {
          symbol: '£',
          position: 'before',
          decimalPlaces: 2
      },
      CAD: {
          symbol: 'C$',
          position: 'before',
          decimalPlaces: 2
      },
      AUD: {
          symbol: 'A$',
          position: 'before',
          decimalPlaces: 2
      },
      INR: {
          symbol: '₹',
          position: 'before',
          decimalPlaces: 2
      },
      JPY: {
          symbol: '¥',
          position: 'before',
          decimalPlaces: 0
      },
      CNY: {
          symbol: '¥',
          position: 'before',
          decimalPlaces: 2
      },
      BRL: {
          symbol: 'R$',
          position: 'before',
          decimalPlaces: 2
      },
      MXN: {
          symbol: 'Mex$',
          position: 'before',
          decimalPlaces: 2
      },
      RUB: {
          symbol: '₽',
          position: 'after',
          decimalPlaces: 2
      },
      ZAR: {
          symbol: 'R',
          position: 'before',
          decimalPlaces: 2
      },
      SGD: {
          symbol: 'S$',
          position: 'before',
          decimalPlaces: 2
      },
      NZD: {
          symbol: 'NZ$',
          position: 'before',
          decimalPlaces: 2
      },
      CHF: {
          symbol: 'CHF',
          position: 'before',
          decimalPlaces: 2
      },
      HKD: {
          symbol: 'HK$',
          position: 'before',
          decimalPlaces: 2
      },
      SEK: {
          symbol: 'kr',
          position: 'after',
          decimalPlaces: 2
      },
      NOK: {
          symbol: 'kr',
          position: 'after',
          decimalPlaces: 2
      },
      DKK: {
          symbol: 'kr',
          position: 'after',
          decimalPlaces: 2
      },
      PLN: {
          symbol: 'zł',
          position: 'after',
          decimalPlaces: 2
      },
      THB: {
          symbol: '฿',
          position: 'before',
          decimalPlaces: 2
      },
      KRW: {
          symbol: '₩',
          position: 'before',
          decimalPlaces: 0
      },
      IDR: {
          symbol: 'Rp',
          position: 'before',
          decimalPlaces: 0
      },
      SAR: {
          symbol: '﷼',
          position: 'after',
          decimalPlaces: 2
      },
      AED: {
          symbol: 'د.إ',
          position: 'after',
          decimalPlaces: 2
      },
      MYR: {
          symbol: 'RM',
          position: 'before',
          decimalPlaces: 2
      },
      PHP: {
          symbol: '₱',
          position: 'before',
          decimalPlaces: 2
      },
      TRY: {
          symbol: '₺',
          position: 'before',
          decimalPlaces: 2
      },
      EGP: {
          symbol: 'E£',
          position: 'before',
          decimalPlaces: 2
      },
      PKR: {
          symbol: '₨',
          position: 'before',
          decimalPlaces: 2
      },
      NGN: {
          symbol: '₦',
          position: 'before',
          decimalPlaces: 2
      },
      CLP: {
          symbol: 'CLP$',
          position: 'before',
          decimalPlaces: 0
      },
      COP: {
          symbol: 'COL$',
          position: 'before',
          decimalPlaces: 0
      },
      ARS: {
          symbol: 'ARS$',
          position: 'before',
          decimalPlaces: 2
      },
      PEN: {
          symbol: 'S/',
          position: 'before',
          decimalPlaces: 2
      },
      VND: {
          symbol: '₫',
          position: 'after',
          decimalPlaces: 0
      },
      ILS: {
          symbol: '₪',
          position: 'before',
          decimalPlaces: 2
      },
      CZK: {
          symbol: 'Kč',
          position: 'after',
          decimalPlaces: 2
      },
      HUF: {
          symbol: 'Ft',
          position: 'after',
          decimalPlaces: 0
      },
      RON: {
          symbol: 'lei',
          position: 'after',
          decimalPlaces: 2
      },
      BGN: {
          symbol: 'лв',
          position: 'after',
          decimalPlaces: 2
      },
      HRK: {
          symbol: 'kn',
          position: 'after',
          decimalPlaces: 2
      },
      ISK: {
          symbol: 'kr',
          position: 'after',
          decimalPlaces: 0
      },
      UAH: {
          symbol: '₴',
          position: 'after',
          decimalPlaces: 2
      },
      QAR: {
          symbol: '﷼',
          position: 'after',
          decimalPlaces: 2
      },
      KWD: {
          symbol: 'د.ك',
          position: 'after',
          decimalPlaces: 3
      },
      BHD: {
          symbol: 'BD',
          position: 'before',
          decimalPlaces: 3
      },
      OMR: {
          symbol: '﷼',
          position: 'after',
          decimalPlaces: 3
      },
      JOD: {
          symbol: 'JD',
          position: 'before',
          decimalPlaces: 3
      },
      KZT: {
          symbol: '₸',
          position: 'after',
          decimalPlaces: 2
      },
      BDT: {
          symbol: '৳',
          position: 'before',
          decimalPlaces: 2
      },
      LKR: {
          symbol: '₨',
          position: 'before',
          decimalPlaces: 2
      },
      KES: {
          symbol: 'KSh',
          position: 'before',
          decimalPlaces: 2
      },
      GHS: {
          symbol: '₵',
          position: 'before',
          decimalPlaces: 2
      },
      UGX: {
          symbol: 'USh',
          position: 'before',
          decimalPlaces: 0
      },
      TZS: {
          symbol: 'TSh',
          position: 'before',
          decimalPlaces: 0
      },
      ETB: {
          symbol: 'Br',
          position: 'before',
          decimalPlaces: 2
      },
      XOF: {
          symbol: 'CFA',
          position: 'after',
          decimalPlaces: 0
      },
      XAF: {
          symbol: 'FCFA',
          position: 'after',
          decimalPlaces: 0
      }
  };

  // Country to currency mapping
  const countryCurrencyMap = {
      'US': 'USD',
      'CA': 'CAD',
      'GB': 'GBP',
      'AU': 'AUD',
      'NZ': 'NZD',
      'IN': 'INR',
      'JP': 'JPY',
      'CN': 'CNY',
      'BR': 'BRL',
      'MX': 'MXN',
      'RU': 'RUB',
      'ZA': 'ZAR',
      'SG': 'SGD',
      'CH': 'CHF',
      'HK': 'HKD',
      'SE': 'SEK',
      'NO': 'NOK',
      'DK': 'DKK',
      'PL': 'PLN',
      'TH': 'THB',
      'KR': 'KRW',
      'ID': 'IDR',
      'SA': 'SAR',
      'AE': 'AED',
      'MY': 'MYR',
      'PH': 'PHP',
      'TR': 'TRY',
      'EG': 'EGP',
      'PK': 'PKR',
      'NG': 'NGN',
      'CL': 'CLP',
      'CO': 'COP',
      'AR': 'ARS',
      'PE': 'PEN',
      'VN': 'VND',
      'IL': 'ILS',
      'CZ': 'CZK',
      'HU': 'HUF',
      'RO': 'RON',
      'BG': 'BGN',
      'HR': 'HRK',
      'IS': 'ISK',
      'UA': 'UAH',
      'QA': 'QAR',
      'KW': 'KWD',
      'BH': 'BHD',
      'OM': 'OMR',
      'JO': 'JOD',
      'KZ': 'KZT',
      'BD': 'BDT',
      'LK': 'LKR',
      'KE': 'KES',
      'GH': 'GHS',
      'UG': 'UGX',
      'TZ': 'TZS',
      'ET': 'ETB',
      'BJ': 'XOF',
      'BF': 'XOF',
      'CI': 'XOF',
      'GW': 'XOF',
      'ML': 'XOF',
      'NE': 'XOF',
      'SN': 'XOF',
      'TG': 'XOF',
      'CM': 'XAF',
      'CF': 'XAF',
      'TD': 'XAF',
      'CG': 'XAF',
      'GQ': 'XAF',
      'GA': 'XAF',
      // Euro countries
      'DE': 'EUR',
      'FR': 'EUR',
      'IT': 'EUR',
      'ES': 'EUR',
      'PT': 'EUR',
      'NL': 'EUR',
      'BE': 'EUR',
      'AT': 'EUR',
      'GR': 'EUR',
      'IE': 'EUR',
      'FI': 'EUR',
      'SK': 'EUR',
      'SI': 'EUR',
      'LT': 'EUR',
      'LV': 'EUR',
      'EE': 'EUR',
      'CY': 'EUR',
      'MT': 'EUR',
      'LU': 'EUR',
      'MC': 'EUR'
  };

  /**
   * Format price according to currency formatting rules
   */
  function formatPrice(price, currency) {
      const format = currencyFormats[currency] || {
          symbol: currency,
          position: 'before',
          decimalPlaces: 2
      };
      const formattedNumber = price.toFixed(format.decimalPlaces);

      return format.position === 'before' ?
          `${format.symbol}${formattedNumber}` :
          `${formattedNumber} ${format.symbol}`;
  }

  /**
   * Convert price from USD to target currency
   */
  function convertPrice(priceInUSD, targetCurrency) {
      if (!exchangeRates[targetCurrency]) {
          console.error(`Currency ${targetCurrency} not supported`);
          return priceInUSD; // Return original price if currency not found
      }

      return priceInUSD * exchangeRates[targetCurrency];
  }

  /**
   * Update displayed prices based on selected currency
   */
  function updatePrices(currency) {
      pricingPlans.forEach((plan, index) => {
          const convertedPrice = convertPrice(plan.price, currency);
          const formattedPrice = formatPrice(convertedPrice, currency);

          // Update price display in DOM
          const priceElement = document.getElementById(`plan-${index}-price`);
          if (priceElement) {
              priceElement.textContent = formattedPrice;
          }
      });

      // Update currency selection display
      const currencyDisplay = document.getElementById('selected-currency');
      if (currencyDisplay) {
          currencyDisplay.textContent = currency;
      }
  }

  /**
   * Get user's country and set appropriate currency
   * This uses the ip-api.com service which has free tier limitations
   */
  function detectUserCurrency() {
    fetch('https://ip-api.com/json/?fields=countryCode')
          .then(response => response.json())
          .then(data => {
              let currency = 'USD'; // Default

              if (countryCurrencyMap[data.countryCode]) {
                  currency = countryCurrencyMap[data.countryCode];
              }

              // Update currency selector and prices
              const currencySelector = document.getElementById('currency-selector');
              if (currencySelector) {
                  currencySelector.value = currency;
              }

              updatePrices(currency);
          })
          .catch(error => {
              console.error('Error detecting user location:', error);
              updatePrices('USD'); // Fallback to USD
          });
  }

  /**
   * Initialize the currency converter when the page loads
   */
  document.addEventListener('DOMContentLoaded', function() {
      // Create currency selection dropdown
      const currencySelector = document.getElementById('currency-selector');

      if (currencySelector) {
          // Add event listener for currency changes
          currencySelector.addEventListener('change', function() {
              updatePrices(this.value);
          });
      }

      // Try to detect user's currency automatically
      detectUserCurrency();
  });
  /**
   * Format price according to currency formatting rules with thousand separators
   */
  function formatPrice(price, currency) {
      const format = currencyFormats[currency] || {
          symbol: currency,
          position: 'before',
          decimalPlaces: 2
      };

      // Format the number with proper decimal places
      let formattedNumber = price.toFixed(format.decimalPlaces);

      // Add thousand separators
      // Split number into integer and decimal parts
      const parts = formattedNumber.split('.');
      // Add commas to the integer part
      parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
      // Rejoin with decimal part if it exists
      formattedNumber = parts.join('.');

      // Apply currency symbol in the correct position
      return format.position === 'before' ?
          `${format.symbol}${formattedNumber}` :
          `${formattedNumber} ${format.symbol}`;
  }
</script>