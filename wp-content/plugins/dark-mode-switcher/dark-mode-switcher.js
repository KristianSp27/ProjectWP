jQuery(document).ready(function ($) {
  console.log("Dark Mode Switcher Script Loaded.");

  $("#dark-mode-toggle").on("click", function () {
    console.log("Dark Mode Button Clicked.");
    $.ajax({
      type: "POST",
      url: darkModeSwitcherParams.ajaxurl,
      data: { action: "toggle_dark_mode" },
      success: function (response) {
        console.log("Dark Mode Toggle Success. Response:", response);
        if (response === "dark") {
          enableDarkMode();
        } else {
          disableDarkMode();
        }
      },
      error: function (errorThrown) {
        console.error("Dark mode toggle error: " + errorThrown);
      },
    });
  });

  console.log("Current Mode:", darkModeSwitcherParams.currentMode);
  if (darkModeSwitcherParams.currentMode === "dark") {
    enableDarkMode();
  }

  function enableDarkMode() {
    console.log("Enabling Dark Mode.");
    $("body").addClass("dark-mode");
  }

  function disableDarkMode() {
    console.log("Disabling Dark Mode.");
    $("body").removeClass("dark-mode");
  }
});
