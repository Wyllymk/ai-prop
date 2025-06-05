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

Alpine.data('scrollItem', () => ({
	init() {
		const scrollInnerWrapper = this.$refs.scrollInnerWrapper;
		const scrollContainer = this.$refs.scrollContainer;

		if (scrollInnerWrapper && scrollContainer) {
			const originalItems = Array.from(scrollInnerWrapper.children);

			// Clone items two more times (resulting in three copies total)
			for (let i = 0; i < 1; i++) {
				originalItems.forEach((item) => {
					const clonedItem = item.cloneNode(true);
					scrollInnerWrapper.appendChild(clonedItem);
				});
			}

			// Calculate total width and set wrapper width explicitly
			const totalWidth = scrollInnerWrapper.scrollWidth;
			scrollInnerWrapper.style.width = `${totalWidth}px`;

			// GSAP animation
			gsap.to(scrollInnerWrapper, {
				x: () => `-${totalWidth / 2}px`, // Scroll halfway for one set of clones
				duration: 60, // Adjust speed
				ease: 'none',
				repeat: -1, // Infinite loop
			});
		}
	},
}));

Alpine.data('scrollChallenge', () => ({
	init() {
		const scrollInnerWrapper = this.$refs.scrollInnerWrapper;
		const scrollContainer = this.$refs.scrollContainer;

		if (scrollInnerWrapper && scrollContainer) {
			const originalItems = Array.from(scrollInnerWrapper.children);

			// Clone items two more times (resulting in three copies total)
			for (let i = 0; i < 1; i++) {
				originalItems.forEach((item) => {
					const clonedItem = item.cloneNode(true);
					scrollInnerWrapper.appendChild(clonedItem);
				});
			}

			// Calculate total width and set wrapper width explicitly
			const totalWidth = scrollInnerWrapper.scrollWidth;
			scrollInnerWrapper.style.width = `${totalWidth}px`;

			// GSAP animation
			gsap.to(scrollInnerWrapper, {
				x: () => `-${totalWidth / 2}px`, // Scroll halfway for one set of clones
				duration: 30, // Adjust speed
				ease: 'none',
				repeat: -1, // Infinite loop
			});
		}
	},
}));

// Checkout JS
document.addEventListener('DOMContentLoaded', function () {
	// Elements
	const couponDiv = document.getElementById('coupon_div');
	const couponAccepted = document.getElementById('coupon_accepted');
	const couponDisplay = document.getElementById('coupon_display');
	const applyCouponButton = document.getElementById('apply_coupon_button');
	const customCouponCode = document.getElementById('custom_coupon_code');
	const couponCode = document.getElementById('coupon_code');

	// Clear notices function
	function clearCouponNotices() {
		if (couponDisplay) couponDisplay.innerHTML = '';
	}

	// Reset apply button to default state
	function resetApplyButton() {
		if (applyCouponButton) {
			applyCouponButton.disabled = false;
			applyCouponButton.textContent = 'Apply Coupon';
		}
	}

	// 1. Handle custom coupon form submission
	if (applyCouponButton) {
		applyCouponButton.addEventListener('click', function (e) {
			e.preventDefault();
			applyCustomCoupon();
		});
	}

	// 2. Handle Enter key in coupon input
	if (customCouponCode) {
		customCouponCode.addEventListener('keypress', function (e) {
			if (e.which === 13) {
				e.preventDefault();
				applyCustomCoupon();
			}
		});
	}

	// 3. Apply coupon via default WooCommerce form (hidden)
	function applyCustomCoupon() {
		var couponCodeValue = customCouponCode.value.trim();

		if (!couponCodeValue) {
			displayInCustomDiv('Please enter a coupon code', 'error');
			return;
		}

		clearCouponNotices();

		// Set the value in the WooCommerce coupon field
		if (couponCode) couponCode.value = couponCodeValue;

		// Find the actual WooCommerce coupon form
		var wcCouponForm = document.querySelector('form.checkout_coupon');

		if (wcCouponForm) {
			// Update button state
			if (applyCouponButton) {
				applyCouponButton.disabled = true;
				applyCouponButton.textContent = 'Applying...';
			}

			// Create a new submit event
			var submitEvent = new Event('submit', {
				bubbles: true,
				cancelable: true,
			});

			// Dispatch the event on the WooCommerce form
			wcCouponForm.dispatchEvent(submitEvent);

			// If the form wasn't prevented from submitting, submit it
			if (!submitEvent.defaultPrevented) {
				wcCouponForm.submit();
			}
			// Set timeout to reset button after 3 seconds if no response
			setTimeout(resetApplyButton, 3000);
		} else {
			displayInCustomDiv('Could not find coupon form', 'error');
			resetApplyButton();
		}
	}

	// 4. Display messages in your custom div
	function displayInCustomDiv(message, type) {
		var alertClass =
			type === 'error' ? 'woocommerce-error' : 'woocommerce-message';
		couponDisplay.innerHTML =
			'<div class="' +
			alertClass +
			'" role="alert">' +
			message +
			'</div>';
	}

	// 5. Intercept ALL WooCommerce messages and redirect to your div
	function interceptWooCommerceMessages() {
		var messages = document.querySelectorAll(
			'.woocommerce-message:not(#coupon_display *), .woocommerce-error:not(#coupon_display *), .coupon-error-notice:not(#coupon_display *)'
		);

		if (messages.length) {
			messages.forEach(function (msg) {
				var isCouponErrorNotice = msg.classList.contains(
					'coupon-error-notice'
				);

				if (isCouponErrorNotice) {
					couponDisplay.innerHTML =
						'<div class="woocommerce-error" role="alert">' +
						msg.textContent +
						'</div>';
					// Reset button when we get a response
					resetApplyButton();
				} else {
					couponDisplay.innerHTML = msg.outerHTML;
				}
				msg.remove();
			});
		}
	}

	// 6. Run interceptors on these events:
	document.body.addEventListener('updated_checkout', handleCouponEvents);
	document.body.addEventListener('updated_cart_totals', handleCouponEvents);
	document.body.addEventListener('applied_coupon', handleCouponEvents);
	document.body.addEventListener('removed_coupon', handleCouponEvents);

	function handleCouponEvents() {
		interceptWooCommerceMessages();
		resetApplyButton();

		if (applyCouponButton) {
			applyCouponButton.disabled = false;
			applyCouponButton.textContent = 'Apply Coupon';
		}

		const hasCoupons =
			document.querySelectorAll('.cart-discount').length > 0;
		if (hasCoupons) {
			couponDiv.style.display = 'none';
			couponAccepted.style.display = 'flex';
			sessionStorage.setItem('couponApplied', 'true');
		} else {
			couponDiv.style.display = 'flex';
			couponAccepted.style.display = 'none';
			sessionStorage.setItem('couponApplied', 'false');
		}
	}

	// 7. Message check interval
	setInterval(interceptWooCommerceMessages, 500);

	// 8. MutationObserver for dynamic notices
	const observer = new MutationObserver(function (mutations) {
		mutations.forEach(function (mutation) {
			mutation.addedNodes.forEach(function (node) {
				if (
					node.nodeType === 1 &&
					node.classList.contains('coupon-error-notice')
				) {
					interceptWooCommerceMessages();
				}
			});
		});
	});
	observer.observe(document.body, { childList: true, subtree: true });
});

document.addEventListener('DOMContentLoaded', () => {
	const plans = document.querySelectorAll('.plan-item'); // Select all plans
	const users = document.querySelectorAll('.user-item'); // Select all users
	const hero = document.querySelector('.hero'); // Select the hero section
	const evaluationContainer = document.querySelector('.evaluation-container');
	const evaluationLeft = document.querySelector('.evaluation-left');
	const evaluationRights = document.querySelectorAll('.evaluation-right');
	const faq = document.querySelector('.faq'); // Select the faq section
	const image = document.querySelector('.image'); // Select the image section
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

	function animateFeatureSectionSequential(sectionClass) {
		const section = document.querySelector(sectionClass);
		if (!section) return;

		const cards = [
			section.querySelector('.feature-left'),
			section.querySelector('.feature-middle-top'),
			section.querySelector('.feature-middle-bottom'),
			section.querySelector('.feature-right'),
		].filter(Boolean);

		// Set initial state
		gsap.set(cards, { opacity: 0, y: 40 });

		// Create timeline for sequential animation
		const tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
				start: 'top 75%',
				end: 'top 25%',
				toggleActions: 'play none none none',
				// markers: true
			},
		});

		// Add cards to timeline with slight overlap
		tl.to(cards[0], { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' })
			.to(
				cards[1],
				{ opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' },
				'-=0.2'
			)
			.to(
				cards[2],
				{ opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' },
				'-=0.2'
			)
			.to(
				cards[3],
				{ opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' },
				'-=0.2'
			);
	}

	animateFeatureSectionSequential('.custom-section-1');
	animateFeatureSectionSequential('.custom-section-2');

	plans.forEach((plan, index) => {
		// Set different delays based on position for a wave effect
		const delay = index * 0.15;

		gsap.from(plan, {
			opacity: 0,
			y: 50,
			duration: 0.8,
			ease: 'power3.out',
			scrollTrigger: {
				trigger: plan,
				start: 'top 90%', // More visible trigger point
				end: 'top 40%',
				toggleActions: 'play none none none',
			},
			delay: delay, // Small delay between items
		});

		// Bonus: Add a subtle scale effect
		gsap.from(plan, {
			scale: 0.95,
			duration: 0.8,
			ease: 'power2.out',
			scrollTrigger: {
				trigger: plan,
				start: 'top 90%',
				toggleActions: 'play none none none',
			},
			delay: delay,
		});
	});

	gsap.from(users, {
		opacity: 0,
		y: 50, // Move up from 50px
		duration: 1,
		stagger: 0.3, // Delay between animations
		ease: 'power3.out',
		scrollTrigger: {
			trigger: users[0], // Trigger animation when the first plan appears
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

	function setupAnimations() {
		const isMobile = window.innerWidth < 768;
		const tl = gsap.timeline({
			scrollTrigger: {
				trigger: evaluationContainer,
				start: 'top 70%',
				toggleActions: 'play none none none',
			},
		});

		// Left section
		tl.from(evaluationLeft, {
			opacity: 0,
			x: -30,
			duration: 0.5,
			ease: 'power2.out',
		});

		// Right sections
		evaluationRights.forEach((right) => {
			tl.from(
				right,
				{
					opacity: 0,
					x: 30,
					duration: 0.5,
					ease: 'power2.out',
				},
				isMobile ? '>' : `+=${0.2}`
			); // Sequential on mobile, slight overlap on desktop
		});
	}

	setupAnimations();

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
			trigger: image,
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
						link.classList.add('bg-ai-green', 'text-white');
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
						link.classList.remove('bg-ai-green', 'text-white');
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

// State to track the current selected amount and phase
let currentAmount = 100000; // Default to $100,000
let currentPhase = 'phase-2'; // Default to 2-phase

// Content for each button - now properly structured for all amounts
const tableContent = {
	10000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
	25000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
	50000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
	100000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
	200000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
	500000: {
		'phase-1': [
			{
				label: 'Profit Target',
				phase1: '10%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				funded: 'N/A',
			},
		],
		'phase-2': [
			{
				label: 'Profit Target',
				phase1: '8%',
				phase2: '5%',
				funded: '-',
			},
			{
				label: 'Minimum Trading Days',
				phase1: '3',
				phase2: '3',
				funded: '3',
			},
			{
				label: 'Daily Drawdown',
				phase1: '5%',
				phase2: '5%',
				funded: '5%',
			},
			{
				label: 'Maximum Drawdown',
				phase1: '8%',
				phase2: '8%',
				funded: '8%',
			},
			{
				label: 'Trading Period',
				phase1: '30 days',
				phase2: 'N/A',
				funded: 'N/A',
			},
		],
	},
};

// Price mapping for each account size - different prices for 1-phase and 2-phase
const priceMapping = {
	10000: {
		'phase-1': {
			price: '$159.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=14',
		},
		'phase-2': {
			price: '$159.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=21',
		},
	},
	25000: {
		'phase-1': {
			price: '$269.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=15',
		},
		'phase-2': {
			price: '$269.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=22',
		},
	},
	50000: {
		'phase-1': {
			price: '$379.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=16',
		},
		'phase-2': {
			price: '$379.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=23',
		},
	},
	100000: {
		'phase-1': {
			price: '$649.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=17',
		},
		'phase-2': {
			price: '$649.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=24',
		},
	},
	200000: {
		'phase-1': {
			price: '$1,249.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=18',
		},
		'phase-2': {
			price: '$1,249.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=25',
		},
	},
	500000: {
		'phase-1': {
			price: '$2,299.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=19',
		},
		'phase-2': {
			price: '$2,299.00',
			link: 'https://orangered-anteater-575642.hostingersite.com/checkout/?add-to-cart=26',
		},
	},
};

// Function to update table based on selected amount and phase
function updateTable() {
	const tbody = document.getElementById('challenge-body');
	if (!tbody) return;

	tbody.innerHTML = ''; // Clear existing content

	// Get the content for the current amount and phase
	const content = tableContent[currentAmount] || tableContent[100000]; // Fallback to $100K if not found
	const phaseContent = content[currentPhase];

	// Update the table header based on phase selection
	const phase2Header = document.getElementById('phase2-header');
	if (phase2Header) {
		phase2Header.style.display = currentPhase === 'phase-1' ? 'none' : '';
	}

	// Populate the table rows
	phaseContent.forEach((row) => {
		const tr = document.createElement('tr');
		tr.className = 'text-sm border-b border-white/10';

		if (currentPhase === 'phase-1') {
			tr.innerHTML = `
                <td class="px-2 md:px-4 py-2">${row.label}</td>
                <td class="px-2 md:px-4 py-2 text-center font-geist">${row.phase1}</td>
                <td class="px-2 md:px-4 py-2 text-center font-geist">${row.funded}</td>
            `;
		} else {
			tr.innerHTML = `
                <td class="px-2 md:px-4 py-2">${row.label}</td>
                <td class="px-2 md:px-4 py-2 text-center font-geist">${row.phase1}</td>
                <td class="px-2 md:px-4 py-2 text-center font-geist">${row.phase2}</td>
                <td class="px-2 md:px-4 py-2 text-center font-geist">${row.funded}</td>
            `;
		}

		tbody.appendChild(tr);
	});
}

// Function to update price and account size text
function updatePrice() {
	const priceAmt = document.getElementById('priceAmt');
	const priceBtn = document.getElementById('priceBtn');
	const accountSizeText = document.getElementById('accountSizeText');

	// Get the price info for the current amount and phase
	const amountData = priceMapping[currentAmount] || priceMapping[100000];
	const priceInfo = amountData
		? amountData[currentPhase]
		: { price: '$0.00', link: '#' };

	// Update the displayed elements
	if (priceAmt) priceAmt.textContent = priceInfo.price;
	if (priceBtn) priceBtn.href = priceInfo.link;
	if (accountSizeText) {
		const accountSize =
			currentAmount >= 1000 ? `${currentAmount / 1000}K` : currentAmount;
		accountSizeText.textContent = `for $${accountSize} Account`;
	}
}

// Function to handle amount button clicks
function handleAmountClick(amount) {
	currentAmount = amount;
	updateTable();
	updatePrice();
}

// Function to handle phase selection changes
function handlePhaseChange(phase) {
	currentPhase = phase;
	updateTable();
	updatePrice();
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
	// Set initial values
	updateTable();
	updatePrice();

	// Add event listeners for phase buttons
	document
		.getElementById('phase-1-btn')
		?.addEventListener('click', () => handlePhaseChange('phase-1'));
	document
		.getElementById('phase-2-btn')
		?.addEventListener('click', () => handlePhaseChange('phase-2'));

	// Sync with Alpine.js state
	const alpineObserver = new MutationObserver(() => {
		const alpineElement = document.querySelector('[x-data] [x-data]');
		if (alpineElement && alpineElement.__x) {
			const phase1Selected =
				alpineElement.__x.$data.selected === 'phase-1';
			const newPhase = phase1Selected ? 'phase-1' : 'phase-2';
			if (newPhase !== currentPhase) {
				currentPhase = newPhase;
				updateTable();
				updatePrice();
			}
		}
	});

	const alpineContainer = document.querySelector('[x-data] [x-data]');
	if (alpineContainer) {
		alpineObserver.observe(alpineContainer, {
			attributes: true,
			childList: true,
			subtree: true,
		});
	}
});

// Make handleAmountClick available globally so Alpine can call it
window.handleAmountClick = handleAmountClick;
