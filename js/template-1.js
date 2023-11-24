$(document).ready(function () {
  $("#name").on("keyup", function () {
    const name = $(this).val();
    $("#nameplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#designation").on("keyup", function () {
    const name = $(this).val();
    $("#designationplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#websitelink").on("keyup", function () {
    const name = $(this).val();
    $("#previewplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#company").on("keyup", function () {
    const name = $(this).val();
    $("#companyplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#mobilephone").on("keyup", function () {
    const name = $(this).val();
    $("#contactplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#emailaddress").on("keyup", function () {
    const name = $(this).val();
    $("#emailplaceholder").text(name || "");
  });
});
$(document).ready(function () {
  $("#action").on("keyup", function () {
    const name = $(this).val();
    $("#actionplaceholder").text(name || "");
  });
});

// Get the email input element by its ID
$(document).ready(function () {
  $("#emailInput").on("input", function () {
    var emailValue = $(this).val();
    $("#emailLink").attr("href", "mailto:" + emailValue);
  });
});
// call href

$(document).ready(function () {
  $("#phoneInput").on("input", function () {
    var phoneNumber = $(this).val();
    $("#callLink").attr("href", "tel:" + phoneNumber);
  });
});
// whatsapp
$(document).ready(function () {
  const openWhatsAppButton = $("#open-whatsapp");
  const messageNumberInput = $("#message-no");

  openWhatsAppButton.on("click", function (event) {
    event.preventDefault(); // Prevent the default link behavior

    // Get the value from the input field
    const phoneNumber = messageNumberInput.val();

    // Check if the phone number is not empty
    if ($.trim(phoneNumber) !== "") {
      // Construct the WhatsApp URL with the phone number
      const whatsappURL = `https://api.whatsapp.com/send?phone=${encodeURIComponent(
        phoneNumber
      )}`;

      // Open WhatsApp in a new tab or window
      window.open(whatsappURL, "_blank");
    } else {
      // Display an error message if the input is empty
      const messageError = $("#message-error");
      messageError.text("Please enter a phone number.");
    }
  });
});


// address
function updateAddress() {
  // Get values from all input fields
  var street1 = document.getElementById("street-1").value;
  var street2 = document.getElementById("street-2").value;
  var country = document.getElementById("country").value;
  var state = document.getElementById("state").value;
  var city = document.getElementById("city").value;
  var zipCode = document.getElementById("zip-code").value;

  // Create a new address string
  var newAddress = street1;

  if (street2) {
    newAddress += " " + street2;
  }

  newAddress += " " + city + " " + state + " " + zipCode + " " + country;

  // Update the <p> element with the new address
  document.querySelector(".add-p").textContent = newAddress;
}

// image profile
$(document).ready(function () {
  $("#profileImageInput").on("change", function () {
    var cardDiv = $(".card-1-p")[0];
    var profileImageInput = this;

    if (profileImageInput.files && profileImageInput.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        cardDiv.style.backgroundImage = "url('" + e.target.result + "')";
      };

      reader.readAsDataURL(profileImageInput.files[0]);
    }
  });
});

// logo
$(document).ready(function () {
  $("#logoImageInput").on("change", function () {
    const logoInput = this;
    const imageBanner = $("#image-banner")[0];

    if (logoInput.files && logoInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        imageBanner.src = e.target.result;
      };

      reader.readAsDataURL(logoInput.files[0]);
    } else {
      // If no file is selected or supported by the browser, you can set a default image here.
      imageBanner.src = "images/deltaweb.png";
    }
  });
});
// weblink
$(document).ready(function () {
  // Get references to the input and the target link
  const $googleMapInput = $("#google-m-in");
  const $mapLink = $("#map-link");

  // Add an event listener to the input to update the link when the input changes
  $googleMapInput.on("input", function () {
    const enteredUrl = $googleMapInput.val();
    // Update the href attribute of the map link
    $mapLink.attr("href", enteredUrl);
  });
});
// Image preview

$(document).ready(function () {
  var fileInput = $("#file-post");
  var imagePreview = $("#image-preview");

  // Attach an event handler to the file input to listen for changes
  fileInput.on("change", function () {
    // Check if a file was selected
    if (fileInput[0].files && fileInput[0].files[0]) {
      var reader = new FileReader();

      // Set up a FileReader to read the selected file
      reader.onload = function (e) {
        // Update the image source with the data URL of the selected file
        imagePreview.attr("src", e.target.result);
      };

      // Read the selected file as a data URL
      reader.readAsDataURL(fileInput[0].files[0]);
    }
  });
});

// link web
const webLinkInput = document.getElementById("web-link-input");
const dynamicLink = document.getElementById("dynamic-link");

// Add an event listener to the input element
webLinkInput.addEventListener("input", function () {
  // Get the value from the input element
  const inputValue = webLinkInput.value;

  // Update the href attribute of the <a> tag with the input value
  dynamicLink.href = inputValue;
});

//social media

var linkedinInput = document.getElementById("linkedinInput");
var linkedinLink = document.getElementById("linkedinLink");

// Add an event listener to the input field
linkedinInput.addEventListener("input", function () {
  // Get the current value of the input field
  var inputText = linkedinInput.value;

  // Add the prefix to the user's input
  var linkedinURL = "https://www.linkedin.com/in/" + inputText;

  // Update the href attribute of the link
  linkedinLink.href = linkedinURL;
});

const instagramInput = document.getElementById("instagramInput");
const instagramLink = document.getElementById("instagramLink");

// Add an event listener to the input field
instagramInput.addEventListener("input", function () {
  // Get the value entered in the input field
  const instagramUsername = instagramInput.value;

  // Check if a username has been entered
  if (instagramUsername) {
    // Construct the Instagram URL with https
    const instagramURL = `https://www.instagram.com/${instagramUsername}/`;

    // Set the href attribute of the <a> tag to the constructed URL
    instagramLink.href = instagramURL;
  } else {
    // Handle the case when no username is entered
    instagramLink.removeAttribute("href");
  }
});

var facebookInput = document.getElementById("facebookInput");
var facebookLink = document.getElementById("facebookLink");

// Add an event listener to the input element to detect changes
facebookInput.addEventListener("input", function () {
  // Get the current value of the input field
  var inputValue = facebookInput.value;

  // Check if the input value is not empty
  if (inputValue.trim() !== "") {
    // Build the Facebook URL with the input value
    var facebookUrl = "https://www.facebook.com/" + inputValue;

    // Update the href attribute of the <a> element
    facebookLink.href = facebookUrl;
  } else {
    // If the input value is empty, reset the href attribute
    facebookLink.removeAttribute("href");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Get references to the input and Twitter link
  var twitterInput = document.getElementById("twitterInput");
  var twitterLink = document.getElementById("twitterLink");

  // Add an event listener to the input field
  twitterInput.addEventListener("input", function () {
    // Get the current value of the input field
    var twitterHandle = twitterInput.value.trim();

    // Update the href attribute of the Twitter link
    if (twitterHandle !== "") {
      // Build the Twitter URL with the input value
      var twitterURL = "https://www.twitter.com/" + twitterHandle + "/";
      twitterLink.href = twitterURL;
    } else {
      // If the input is empty, set the href to a placeholder URL or "#" as needed
      twitterLink.href = "#";
    }
  });
});

// LINK FOR VIDEO
$(document).ready(function () {
  $("#video-post").on("change", function () {
    var videoFile = this.files[0];

    if (videoFile) {
      var videoContainer = $("#video-previews-v");
      var videoElement = $("<video>");
      var removeButton = $("<span>");

      videoElement.attr("src", URL.createObjectURL(videoFile));
      videoElement.prop("controls", true);

      removeButton.addClass("remove-btn");
      removeButton.html('<i class="fas fa-times"></i>');
      removeButton.on("click", function () {
        videoElement.remove();
        removeButton.remove();
        $("#video-post").val("");
      });

      videoContainer.append(videoElement);
      videoContainer.append(removeButton);
    }
  });
});
