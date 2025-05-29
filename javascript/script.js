/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import Alpine from 'alpinejs';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

window.Alpine = Alpine;

// Counter animation function
function initCounters() {
	const counterElements = document.querySelectorAll('.counter-value');

	counterElements.forEach((element) => {
		// const targetValue = parseInt(element.textContent.replace(/\D/g, '')); // Extract number (removes $, commas)
		const isCurrency = element.textContent.includes('$'); // Check if it's currency

		gsap.from(element, {
			textContent: 0,
			duration: 3,
			ease: 'power1.out',
			snap: { textContent: 1 }, // Ensures whole numbers
			scrollTrigger: {
				trigger: element.closest('.w-full'), // Trigger when parent div enters viewport
				start: 'top 80%',
				toggleActions: 'play none none none',
			},
			onUpdate: function () {
				// Format number with commas (and $ if currency)
				const value = Math.floor(this.targets()[0].textContent);
				element.textContent = isCurrency
					? `$${value.toLocaleString()}`
					: value.toLocaleString();
			},
		});
	});
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
	Alpine.start();
	initCounters(); // Initialize counters
});

document.addEventListener('DOMContentLoaded', () => {
	const plans = document.querySelectorAll('.plan-item'); // Select all plans
	const works = document.querySelectorAll('.work-item'); // Select all works
	const benefits = document.querySelectorAll('.benefit-item'); // Select all benefits
	const reviews = document.querySelectorAll('.review-item'); // Select all reviews
	const hero = document.querySelector('.hero'); // Select the hero section
	const sports = document.querySelector('.sports'); // Select the sports section
	const evaluationLeft = document.querySelector('.evaluation-left'); // Select the evaluation left section
	const evaluationRight = document.querySelector('.evaluation-right'); // Select the evaluation right section
	const secureLeft = document.querySelector('.secure-left'); // Select the secure left section
	const secureRight = document.querySelector('.secure-right'); // Select the secure right section
	const faq = document.querySelector('.faq'); // Select the faq section
	const image = document.querySelector('.image'); // Select the faq section
	const rows = document.querySelectorAll('.row-animate');

	rows.forEach((row) => {
		const leftElement = row.querySelector('.animate-left');
		const rightElement = row.querySelector('.animate-right');

		// Animate left element (slides in from left)
		if (leftElement) {
			gsap.from(leftElement, {
				opacity: 0,
				x: -50,
				duration: 1,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: row,
					start: 'top 80%',
					toggleActions: 'play none none none',
				},
			});
		}

		// Animate right element (slides in from right)
		if (rightElement) {
			gsap.from(rightElement, {
				opacity: 0,
				x: 50,
				duration: 1,
				ease: 'power3.out',
				scrollTrigger: {
					trigger: row,
					start: 'top 80%',
					toggleActions: 'play none none none',
				},
			});
		}
	});

	// Animation for plans
	gsap.from(plans, {
		opacity: 0,
		y: 50, // Move up from 50px
		duration: 1,
		stagger: 0.4, // Delay between animations
		ease: 'power3.out',
		scrollTrigger: {
			trigger: plans[0], // Trigger animation when the first plan appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for works
	gsap.from(works, {
		opacity: 0,
		y: 50, // Move up from 50px
		duration: 1,
		stagger: 0.4, // Delay between animations
		ease: 'power3.out',
		scrollTrigger: {
			trigger: works[0], // Trigger animation when the first work appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for benefits
	gsap.from(benefits, {
		opacity: 0,
		y: 50, // Move up from 50px
		duration: 1,
		stagger: 0.4, // Delay between animations
		ease: 'power3.out',
		scrollTrigger: {
			trigger: benefits[0], // Trigger animation when the first benefit appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for benefits
	gsap.from(reviews, {
		opacity: 0,
		y: 50, // Move up from 50px
		duration: 1,
		stagger: 0.4, // Delay between animations
		ease: 'power3.out',
		scrollTrigger: {
			trigger: reviews[0], // Trigger animation when the first review appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for hero
	gsap.from(hero, {
		opacity: 0, // Fade in from transparent
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
	});

	// Animation for sports
	gsap.from(sports, {
		opacity: 0, // Fade in from transparent
		y: 50, // Move up from 50px
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
		scrollTrigger: {
			trigger: sports, // Trigger animation when the sports section appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for evaluationRight
	gsap.from(evaluationRight, {
		opacity: 0, // Fade in from transparent
		x: 50, // Move in from 50px to the right
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
		scrollTrigger: {
			trigger: evaluationRight, // Trigger animation when the evaluationRight section appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for evaluationLeft
	gsap.from(evaluationLeft, {
		opacity: 0, // Fade in from transparent
		x: -50, // Move in from 50px to the left
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
		scrollTrigger: {
			trigger: evaluationLeft, // Trigger animation when the evaluationLeft section appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for secureRight
	gsap.from(secureRight, {
		opacity: 0, // Fade in from transparent
		x: 50, // Move in from 50px to the right
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
		scrollTrigger: {
			trigger: secureRight, // Trigger animation when the secureRight section appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	// Animation for secureLeft
	gsap.from(secureLeft, {
		opacity: 0, // Fade in from transparent
		x: -50, // Move in from 50px to the left
		duration: 2, // Animation duration of 2 seconds
		ease: 'power3.out', // Smooth easing
		scrollTrigger: {
			trigger: secureLeft, // Trigger animation when the secureLeft section appears
			start: 'top 80%', // Start when 80% of the section is in view
			toggleActions: 'play none none none',
		},
	});

	gsap.from(faq, {
		rotationX: 90, // Flip on the X-axis
		opacity: 0,
		duration: 1.5,
		ease: 'power3.out',
		scrollTrigger: {
			trigger: '.card',
			start: 'top 80%',
			toggleActions: 'play none none none',
		},
	});
	gsap.from(image, {
		filter: 'blur(10px)', // Start with a blur effect
		opacity: 0,
		duration: 2,
		ease: 'power2.out',
		scrollTrigger: {
			trigger: '.image',
			start: 'top 80%',
			toggleActions: 'play none none none',
		},
	});
});

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
	const menuButton = document.querySelector('#menuButton');
	const menuLinks = document.querySelectorAll('.menu-link'); // Mobile menu links
	const navLinks = document.querySelectorAll('.nav-link'); // Desktop navigation links
	const navMenu = document.querySelector('#navMenu');
	const overlay = document.getElementById('overlay');

	const sections = document.querySelectorAll('section'); // All sections
	const linkMap = {}; // Map section IDs to links

	// Toggle menu on button click
	menuButton.addEventListener('click', function () {
		navMenu.classList.toggle('-translate-x-full');
		navMenu.classList.toggle('opacity-0');
		navMenu.classList.toggle('opacity-100');
		navMenu.classList.toggle('pointer-events-none');
		overlay.classList.toggle('hidden');
	});

	// Close menu and overlay on outside click
	overlay.addEventListener('click', function () {
		closeMenu();
	});

	// Close menu on mobile menu link click
	menuLinks.forEach((link) => {
		link.addEventListener('click', function () {
			closeMenu();
		});
	});

	// Function to close menu
	function closeMenu() {
		navMenu.classList.add('-translate-x-full');
		navMenu.classList.add('opacity-0');
		navMenu.classList.add('pointer-events-none');
		overlay.classList.add('hidden');
	}

	// Map sections to their links
	[...menuLinks, ...navLinks].forEach((link) => {
		const sectionId = link
			.getAttribute('href')
			.replace('#', '')
			.toLowerCase();
		if (!linkMap[sectionId]) linkMap[sectionId] = [];
		linkMap[sectionId].push(link);
	});

	const observerOptions = {
		root: null,
		rootMargin: '0px 0px -100px 0px',
		threshold: [0.1, 0.5, 0.9],
	};

	const observer = new IntersectionObserver(function (entries) {
		entries.forEach((entry) => {
			const sectionId = entry.target.id.toLowerCase();
			const links = linkMap[sectionId];

			if (entry.isIntersecting) {
				// Add active classes
				links?.forEach((link) => {
					if (link.closest('.menu-link')) {
						// Mobile menu link
						link.classList.add('bg-aeon-yellow', 'text-white');
					} else if (link.classList.contains('nav-link')) {
						// Desktop nav link
						link.classList.add('text-gray-900');
						link.classList.remove('text-black');

						// Also underline the span inside the nav link
						const underlineSpan = link.querySelector('span');
						if (underlineSpan) {
							underlineSpan.classList.add('scale-x-100');
						}
					}
				});
			} else {
				// Remove active classes
				links?.forEach((link) => {
					if (link.closest('.menu-link')) {
						// Mobile menu link
						link.classList.remove('bg-aeon-yellow', 'text-white');
					} else if (link.classList.contains('nav-link')) {
						// Desktop nav link
						link.classList.remove('text-gray-900');
						link.classList.add('text-black');

						// Remove underline effect
						const underlineSpan = link.querySelector('span');
						if (underlineSpan) {
							underlineSpan.classList.remove('scale-x-100');
						}
					}
				});
			}
		});
	}, observerOptions);

	// Observe all sections
	sections.forEach((section) => observer.observe(section));
});

function smoothScrollTo(targetId) {
	const target = document.getElementById(targetId);
	if (!target) return;

	const header = document.querySelector('header'); // Replace 'header' with your header's selector
	const offset = header ? header.offsetHeight : 0;
	const startPosition = window.pageYOffset;
	const targetPosition =
		target.getBoundingClientRect().top + startPosition - offset;
	const distance = targetPosition - startPosition;
	const duration = 1000; // Duration of the scroll in milliseconds
	let startTime = null;

	function animation(currentTime) {
		if (startTime === null) startTime = currentTime;
		const timeElapsed = currentTime - startTime;
		const run = easeInOutQuad(
			timeElapsed,
			startPosition,
			distance,
			duration
		);
		window.scrollTo(0, run);
		if (timeElapsed < duration) requestAnimationFrame(animation);
	}

	// Easing function for smooth start and end
	function easeInOutQuad(t, b, c, d) {
		t /= d / 2;
		if (t < 1) return (c / 2) * t * t + b;
		t--;
		return (-c / 2) * (t * (t - 2) - 1) + b;
	}

	requestAnimationFrame(animation);
}

// Attach smooth scroll to buttons or links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();
		const targetId = this.getAttribute('href').substring(1);
		smoothScrollTo(targetId);
	});
});
