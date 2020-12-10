var optionObject = {
  "Smartphone": {
    "Apple": ["	iPhone 3G", "iPhone 3GS", "iPhone 4", "iPhone 4S", "iPhone 5","iPhone 5c","iPhone 5s","iPhone 6",
	"iPhone 6 Plus","iPhone 6s Plus","iPhone 7","iPhone 7 Plus", "iPhone 8", "iPhone 8 Plus", "iPhone X", "iPhone XR", 
	"iPhone XS","iPhone XS Max","iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone 12 mini" ,"iPhone 12","iPhone 12 Pro","iPhone 12 Pro Max"],

    "Samsung": ["	Samsung Galaxy S", "Samsung Galaxy S2", "Samsung Galaxy S3", "	Samsung Galaxy S4", "Samsung Galaxy S5", "Samsung Galaxy S6", "Samsung Galaxy S7",
	"	Samsung Galaxy S8", "Samsung Galaxy S9", "Samsung Galaxy S10", "Samsung Galaxy S20"],
    "Huawei": ["Huawei Mate 8","Huawei Mate 9","Huawei Mate 9 Lite","Huawei Mate 9 Pro","Huawei Mate 10","Huawei Mate 10 Lite","Huawei Mate 10 Pro",
	"Huawei Mate 20","Huawei Mate 20 Lite","Huawei Mate 20 Lite","Huawei Mate 20 Pro","Huawei Mate 20 X","Huawei Mate 30","Huawei Mate 30 Pro","Huawei Mate 40","Huawei Mate 40 Pro","Huawei Mate 40 Pro+"],
    "Nokia": [""],
    "Motorola": [""],
    "Oppo": [""],
    "Xiaomi": [""],
    "Sony": [""],
    "One Plus": [""],
    "Autre": [""]
  },
  "TV": {
    "Samsung": [""],
    "LG": [""],
    "Panasonic": [""],
    "Philips": [""],
    "Sony": [""],
    "Sharp": [""],
    "Polaroid": [""],
    "Autre": [""]
  },
  "PC": {
    "Apple": [""],
    "Dell": [""],
    "HP": [""],
    "Acer": [""],
    "Lenovo": [""],
    "Asus": [""],
    "Microsoft": [""],
    "MSI": [""],
    "Autre": [""]
  },
  "Bouloire": {
    "EKG": [""],
    "IKEA": [""],
    "Russel": [""],
    "Alder": [""],
    "Autre": [""]
  },
  "Machine à laver": {
    "Samsung": [""],
    "AEG": [""],
    "Proline": [""],
    "LG": [""],
    "Indest": [""],
    "Thomson": [""],
    "BOSH": [""],
    "Siemens": [""],
    "Beko": [""],
    "Miele": [""],
    "Autre": [""]
  },
  "Fer à repasser": {
    "Bosh": [""],
    "Bruan": [""],
    "Calor": [""],
    "Philips": [""],
    "Proline": [""],
    "Rowenta": [""],
    "Autre": [""]
  },
  "Sèche-cheveux": {
    "Babyliss": [""],
    "Philips": [""],
    "Remington": [""],
    "Rowenta": [""],
    "Valera": [""],
    "Autre": [""]
  }
}
window.onload = function() {
  var deviceSel = document.getElementById("device");
  var brandSel = document.getElementById("brand");
  for (var x in optionObject) {
    deviceSel.options[deviceSel.options.length] = new Option(x, x);
  }
  deviceSel.onchange = function() {
    //empty models- and brands- dropdowns
    brandSel.length = 1;
    //display correct values
    for (var y in optionObject[this.value]) {
      brandSel.options[brandSel.options.length] = new Option(y, y);
    }
  }
}
