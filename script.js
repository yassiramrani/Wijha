// Set current year in footer
document.getElementById("current-year").textContent = new Date().getFullYear()

// Mobile menu toggle
const menuToggle = document.querySelector(".mobile-menu-toggle")
const mainNav = document.querySelector(".main-nav ul")

if (menuToggle && mainNav) {
  menuToggle.addEventListener("click", () => {
    mainNav.style.display = mainNav.style.display === "flex" ? "none" : "flex"
    mainNav.style.flexDirection = "column"
    mainNav.style.position = "absolute"
    mainNav.style.top = "100%"
    mainNav.style.left = "0"
    mainNav.style.width = "100%"
    mainNav.style.padding = "1rem"
    mainNav.style.backgroundColor = "var(--color-white)"
    mainNav.style.boxShadow = "var(--shadow)"
    mainNav.style.zIndex = "50"

    // Toggle hamburger to X
    const spans = menuToggle.querySelectorAll("span")
    if (mainNav.style.display === "flex") {
      spans[0].style.transform = "rotate(45deg) translate(5px, 5px)"
      spans[1].style.opacity = "0"
      spans[2].style.transform = "rotate(-45deg) translate(5px, -5px)"
    } else {
      spans[0].style.transform = "none"
      spans[1].style.opacity = "1"
      spans[2].style.transform = "none"
    }
  })
}

// Close mobile menu when clicking outside
document.addEventListener("click", (event) => {
  if (
    mainNav &&
    mainNav.style.display === "flex" &&
    !event.target.closest(".mobile-menu-toggle") &&
    !event.target.closest(".main-nav")
  ) {
    mainNav.style.display = "none"

    // Reset hamburger icon
    const spans = menuToggle.querySelectorAll("span")
    spans[0].style.transform = "none"
    spans[1].style.opacity = "1"
    spans[2].style.transform = "none"
  }
})

// Simple form validation
const searchForm = document.querySelector(".search-form")
if (searchForm) {
  searchForm.addEventListener("submit", (event) => {
    event.preventDefault()

    const nationality = document.getElementById("nationality").value
    const destination = document.getElementById("destination").value

    if (!nationality || !destination) {
      alert("Please select both nationality and destination")
      return
    }

    // In a real application, you would submit the form or redirect to search results
    alert("Search submitted successfully! This would redirect to search results in a real application.")
  })
}

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()

    const targetId = this.getAttribute("href")
    if (targetId === "#") return

    const targetElement = document.querySelector(targetId)
    if (targetElement) {
      targetElement.scrollIntoView({
        behavior: "smooth",
      })

      // Close mobile menu if open
      if (mainNav && mainNav.style.display === "flex") {
        mainNav.style.display = "none"

        // Reset hamburger icon
        const spans = menuToggle.querySelectorAll("span")
        spans[0].style.transform = "none"
        spans[1].style.opacity = "1"
        spans[2].style.transform = "none"
      }
    }
  })
})
