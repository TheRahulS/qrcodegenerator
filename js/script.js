// for dropdown menu
$(document).ready(function () {
  // Toggle the dropdown menu on click
  $(".nav-item").click(function () {
    $(this).find(".dropdown-menu").toggle();
  });

  // Close the dropdown when clicking outside of it
  $(document).click(function (event) {
    if (!$(event.target).closest(".nav-item").length) {
      $(".dropdown-menu").hide();
    }
  });
});
// testmonail
const testimonials = [
  "./images/slider/slider1.png",
  "./images/slider/slider2.png",
  "./images/slider/slider3.png",
];

$(document).ready(function () {
  let i = 0; // Current slide index
  let j = testimonials.length; // Total number of testimonials

  function displayTestimonial() {
    $("#testimonial-container").html(`
            <img src="${testimonials[i]}" alt="Testimonial Image">
        `);
  }

  $("#next").click(function () {
    i = (i + 1) % j;
    displayTestimonial();
  });

  $("#prev").click(function () {
    i = (i - 1 + j) % j;
    displayTestimonial();
  });

  // Initial display
  displayTestimonial();
});
// jQuery code for image preview
$(document).ready(function () {
  $("#logoImage").change(function (e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#logoPreview").attr("src", e.target.result);
      };
      reader.readAsDataURL(file);
    }
  });

  $("#profileImage").change(function (e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        $("#profilePreview").attr("src", e.target.result);
      };
      reader.readAsDataURL(file);
    }
  });
});
// for accrodian image preview
$(document).ready(function () {
  // Function to handle image preview
  function previewImage(inputId, previewId) {
    const imageInput = $("#" + inputId)[0];
    const imagePreview = $("#" + previewId);

    if (imageInput.files && imageInput.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        imagePreview.attr("src", e.target.result);
        imagePreview.css("display", "block");
      };

      reader.readAsDataURL(imageInput.files[0]);
    } else {
      imagePreview.attr("src", "#");
      imagePreview.css("display", "none");
    }
  }

  // Attach onchange event handlers for both input elements
  $("#profileImageInput").change(function () {
    previewImage("profileImageInput", "profileImagePreview");
  });

  $("#logoImageInput").change(function () {
    previewImage("logoImageInput", "logoImagePreview");
  });
});

// arrow in select
$(document).ready(function () {
  $("#contactSelect").change(function () {
    if ($(this).val() === "location") {
      $(".arrow-down").hide();
      $(".arrow-up").show();
    } else {
      $(".arrow-down").show();
      $(".arrow-up").hide();
    }
  });
});

// phone validation
function validatePhoneNumber(phoneNumber) {
  // Use a regular expression to match a generic phone number pattern
  const regex = /^[0-9()+-]*$/;
  return regex.test(phoneNumber);
}

// Function to validate messaging number format
function validateMessageNumber(messageNumber) {
  // Use a regular expression to match a generic messaging number pattern
  const regex = /^[0-9]+$/;
  return regex.test(messageNumber);
}

// Function to handle phone number input validation
function handlePhoneValidation() {
  const phoneNumber = $("#mobile").val();
  const errorSpan = $("#phone-error");

  if (validatePhoneNumber(phoneNumber)) {
    errorSpan.text(""); // Clear any previous error message
  } else {
    errorSpan.text("Invalid phone number format");
  }
}

// Function to handle messaging number input validation
function handleMessageValidation() {
  const messageNumber = $("#message-no").val();
  const errorSpan = $("#message-error");

  if (validateMessageNumber(messageNumber)) {
    errorSpan.text(""); // Clear any previous error message
  } else {
    errorSpan.text("Invalid messaging number format");
  }
}

// Function to handle phone number input validation for the new row
function handlePhoneValidationB() {
  const phoneNumberB = $("#mobile-b").val();
  const errorSpanB = $("#phone-error-b");

  if (validatePhoneNumber(phoneNumberB)) {
    errorSpanB.text(""); // Clear any previous error message
  } else {
    errorSpanB.text("Invalid phone number format");
  }
}

// Add event listeners to validate phone and messaging numbers on input change
$("#mobile").on("input", handlePhoneValidation);
$("#message-no").on("input", handleMessageValidation);
$("#mobile-b").on("input", handlePhoneValidationB);
// upload template
$("#file-upload").css("opacity", "0");

$("#file-browser").click(function (e) {
  e.preventDefault();
  $("#file-upload").trigger("click");
});

// images preview for post
$(document).ready(function () {
  const fileInput = $("#file-post");
  const filePreview = $("#file-preview-post");

  fileInput.on("change", function (e) {
    filePreview.html(""); // Clear any previous previews

    const files = e.target.files;

    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const reader = new FileReader();

      // Check if the file type is allowed
      if (
        file.type === "image/jpeg" ||
        file.type === "image/jpg" ||
        file.type === "image/png"
      ) {
        reader.onload = function (event) {
          const imageUrl = event.target.result;

          const imgContainer = $("<div>");
          imgContainer.addClass("img-container");

          const closeButton = $("<button>");
          closeButton.addClass(" btn   btn-primary");
          const closeIcon = $("<i>");
          closeIcon.addClass("fa fa-close"); // Font Awesome close icon
          closeButton.append(closeIcon);

          closeButton.click(function () {
            imgContainer.remove();
          });

          const img = $("<img>");
          img.attr("src", imageUrl);
          img.css("max-width", "100%");
          img.css("max-height", "150px"); // You can adjust the max height as needed

          imgContainer.append(closeButton);
          imgContainer.append(img);

          filePreview.append(imgContainer);
        };

        reader.readAsDataURL(file);
      }
    }
  });
});

// imge validation
window.Parsley.addValidator("maxFileSize", {
  validateString: function (_value, maxSize, parsleyInstance) {
    if (!window.FormData) {
      // alert('You are making all developpers in the world cringe. Upgrade your browser!');
      return true;
    }
    var files = parsleyInstance.$element[0].files;
    return files.length != 1 || files[0].size <= maxSize * 1024;
  },
  requirementType: "integer",
  messages: {
    en: "This file should not be larger than 5mb",
    // fr: 'Ce fichier est plus grand que %s Kb.'
  },
});

// phone validation

window.Parsley.addValidator("mobile-no", {
  validateString: function (value) {
    // Define your mobile phone number validation logic here
    // Example: Check if the value is a valid Indian mobile number pattern
    var regex = /^[6-9]\d{9}$/;
    return regex.test(value);
  },
  messages: {
    en: "Please enter a valid mobile phone number.",
  },
});

// zip  code

window.Parsley.addValidator("zipCode", {
  validateString: function (value) {
    var regex = /^[1-9][0-9]{5}$/; // Indian ZIP code pattern
    return regex.test(value);
  },
  messages: {
    en: "Please enter a valid Indian ZIP code.",
  },
});

// form validation after submission

// Initialize Parsley on your form
$("#myForm").parsley();

// Handle form submission
$("#myForm").on("submit", function (e) {
  e.preventDefault(); // Prevent default form submission

  // Validate the form using Parsley
  if ($("#myForm").parsley().isValid()) {
    // Form is valid, proceed with submission
    this.submit();
  } else {
    // Form is invalid, display error messages in the modal
    displayErrorModal();
  }
});

// Function to display the error modal
function displayErrorModal() {
  var errorList = [];
  var parsleyErrors = $("#myForm").parsley().getErrorsMessages();

  for (var fieldName in parsleyErrors) {
    errorList.push("<li>" + parsleyErrors[fieldName] + "</li>");
  }

  $("#errorList").html(errorList.join(""));
  $("#errorModal").modal("show");
}
