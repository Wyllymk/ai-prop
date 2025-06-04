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
	const evaluationLeft = document.querySelector('.evaluation-left'); // Select the evaluation left section
	const evaluationRight = document.querySelector('.evaluation-right'); // Select the evaluation right section
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
				start: 'top 75%', // More visible trigger point
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
				start: 'top 75%',
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
let amount = '15000'; // Default to $15,000

// Function to update table
function updateTable(amount) {
	const tbody = document.getElementById('challenge-body');
	tbody.innerHTML = ''; // Clear existing content

	tableContent[amount].forEach((row) => {
		const tr = document.createElement('tr');
		tr.className = 'text-sm border-b border-white/10';
		tr.innerHTML = `
			<td class="px-2 md:px-4 py-2">${row.label}</td>
			<td class="px-2 md:px-4 py-2 text-center font-geist">${row.phase1}</td>
			<td class="px-2 md:px-4 py-2 text-center font-geist">${row.phase2}</td>
			<td class="px-2 md:px-4 py-2 text-center font-geist">${row.funded}</td>
		`;
		tbody.appendChild(tr);
	});
}

// Function to handle amount button clicks
function handleAmountClick(amount) {
	if (tableContent[amount]) {
		updateTable(amount);
		updatePrice(amount);
	} else {
		console.error('Invalid amount selected:', amount);
	}
}

// Function to handle amount button clicks
function updatePrice(amount) {
	const priceAmt = document.getElementById('priceAmt');
	const priceBtn = document.getElementById('priceBtn');

	// Map amounts to prices and links
	const priceMapping = {
		1000: {
			price: '$99.00',
			link: 'https://betvault.com/checkout/?add-to-cart=22',
		},
		5000: {
			price: '$149.00',
			link: 'https://betvault.com/checkout/?add-to-cart=23',
		},
		10000: {
			price: '$269.00',
			link: 'https://betvault.com/checkout/?add-to-cart=24',
		},
		15000: {
			price: '$349.00',
			link: 'https://betvault.com/checkout/?add-to-cart=25',
		},
		25000: {
			price: '$449.00',
			link: 'https://betvault.com/checkout/?add-to-cart=26',
		},
		50000: {
			price: '$699.00',
			link: 'https://betvault.com/checkout/?add-to-cart=27',
		},
		75000: {
			price: '$799.00',
			link: 'https://betvault.com/checkout/?add-to-cart=28',
		},
	};

	// Update price text and button link
	const selected = priceMapping[amount] || { price: '$0.00', link: '#' }; // Default values
	priceAmt.textContent = selected.price;
	priceBtn.setAttribute('href', selected.link); // Update href of the button
}

// Add event listeners once the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
	// Add event listeners for amount buttons
	const btn1000 = document.getElementById('btn-10000');
	const btn5000 = document.getElementById('btn-25000');
	const btn10000 = document.getElementById('btn-50000');
	const btn15000 = document.getElementById('btn-100000');
	const btn25000 = document.getElementById('btn-150000');
	const btn50000 = document.getElementById('btn-200000');

	if (btn1000)
		btn1000.addEventListener('click', () => handleAmountClick('1000'));
	if (btn5000)
		btn5000.addEventListener('click', () => handleAmountClick('5000'));
	if (btn10000)
		btn10000.addEventListener('click', () => handleAmountClick('10000'));
	if (btn15000)
		btn15000.addEventListener('click', () => handleAmountClick('15000'));
	if (btn25000)
		btn25000.addEventListener('click', () => handleAmountClick('25000'));
	if (btn50000)
		btn50000.addEventListener('click', () => handleAmountClick('50000'));

	// Initial table load
	updateTable(amount);
});

// Content for each button
const tableContent = {
	1000: [
		{
			label: 'Profit Target',
			phase1: '8%',
			phase2: '8%',
			funded: '8%',
		},
		{
			label: 'Minimum Trading Days',
			phase1: '0',
			phase2: '0',
			funded: '0',
		},
		{
			label: 'Daily Drawdown',
			phase1: '4%',
			phase2: '4%',
			funded: '4%',
		},
		{
			label: 'Maximum Drawdown',
			phase1: '10%',
			phase2: '10%',
			funded: '10%',
		},
		{
			label: 'Trading Period',
			phase1: '10%',
			phase2: 'N/A',
			funded: 'N/A',
		},
	],
	5000: [
		{
			label: 'Profit Target',
			phase1: '$1,500',
			phase2: '$1,000',
			funded: '$1,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$250',
			phase2: '$250',
			funded: '$250',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$500',
			phase2: '$500',
			funded: '$500',
		},
		{
			label: 'Max Loss',
			phase1: '$1,500',
			phase2: '$1,500',
			funded: '$1,500',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$750',
			phase2: '$750',
			funded: '$750',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
	10000: [
		{
			label: 'Profit Target',
			phase1: '$3,000',
			phase2: '$2,000',
			funded: '$2,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$500',
			phase2: '$500',
			funded: '$500',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$1,000',
			phase2: '$1,000',
			funded: '$1,000',
		},
		{
			label: 'Max Loss',
			phase1: '$3,000',
			phase2: '$3,000',
			funded: '$3,000',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$1,500',
			phase2: '$1,500',
			funded: '$1,500',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
	15000: [
		{
			label: 'Profit Target',
			phase1: '$4,500',
			phase2: '$3,000',
			funded: '$3,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$750',
			phase2: '$750',
			funded: '$750',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$1,500',
			phase2: '$1,500',
			funded: '$1,500',
		},
		{
			label: 'Max Loss',
			phase1: '$4,500',
			phase2: '$4,500',
			funded: '$4,500',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$2,250',
			phase2: '$2,250',
			funded: '$2,250',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
	25000: [
		{
			label: 'Profit Target',
			phase1: '$7,500',
			phase2: '$5,000',
			funded: '$5,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$1,250',
			phase2: '$1,250',
			funded: '$1,250',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$2,500',
			phase2: '$2,500',
			funded: '$2,500',
		},
		{
			label: 'Max Loss',
			phase1: '$7,500',
			phase2: '$7,500',
			funded: '$7,500',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$3,750',
			phase2: '$3,750',
			funded: '$3,750',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
	50000: [
		{
			label: 'Profit Target',
			phase1: '$12,500',
			phase2: '$10,000',
			funded: '$10,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$2,500',
			phase2: '$2,500',
			funded: '$2,500',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$5,000',
			phase2: '$5,000',
			funded: '$5,000',
		},
		{
			label: 'Max Loss',
			phase1: '$15,000',
			phase2: '$15,000',
			funded: '$15,000',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$7,500',
			phase2: '$7,500',
			funded: '$7,500',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
	75000: [
		{
			label: 'Profit Target',
			phase1: '$22,500',
			phase2: '$15,000',
			funded: '$15,000',
		},
		{
			label: 'Minimum Pick Amount',
			phase1: '$3,750',
			phase2: '$3,750',
			funded: '$3,750',
		},
		{
			label: 'Minimum Picks',
			phase1: '20',
			phase2: '20',
			funded: '20',
		},
		{
			label: 'Maximum Pick Amount',
			phase1: '$7,500',
			phase2: '$7,500',
			funded: '$7,500',
		},
		{
			label: 'Max Loss',
			phase1: '$22,500',
			phase2: '$22,500',
			funded: '$22,500',
		},
		{
			label: 'Daily Drawdown',
			phase1: '$11,250',
			phase2: '$11,250',
			funded: '$11,250',
		},
		{
			label: 'Time Limit',
			phase1: '20 days',
			phase2: '20 days',
			funded: '20 days',
		},
	],
};
