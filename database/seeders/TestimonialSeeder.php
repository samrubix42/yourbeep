<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Karan Malhotra',
                'role' => 'VP of Engineering, InnovateTech',
                'content' => 'Alolika\'s session on Behavioural Signals was an eye-opener. I finally understood why my response to high-stress release cycles was always hyper-control. The practices have helped me lead with calm clarity.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Anjali Subramanian',
                'role' => 'Leadership Coach & Consultant',
                'content' => 'Having worked in HR for 12 years, I thought I knew self-awareness. Behavioural Signal Intelligence goes deeper—it connects your physical nervous system response to your daily leadership actions.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Rohan Sen',
                'role' => 'Co-Founder, YourCart',
                'content' => 'I used to constantly seek validation through overworking, leading to massive burnout. This masterclass taught me to recognize the early physiological signals and choose sustainable responses.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Priya Joshi',
                'role' => 'Product Director, ScaleUp Solutions',
                'content' => 'The pattern mapping exercises are incredibly practical. Rather than theoretical wellness advice, we got active tools to break automated habits in real-time meetings.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Sandeep Nair',
                'role' => 'Senior Engineering Manager',
                'content' => 'Highly recommend this to any manager feeling overwhelmed. The distinction between mental wellbeing and behavioural patterns is critical, and Alolika explains it beautifully.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Sneha Deshmukh',
                'role' => 'Creative Director, StudioD',
                'content' => 'The somatic awareness scan has completely changed how I handle client reviews. I catch my physical defensiveness early and redirect it into creative curiosity.',
                'rating' => 4,
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Vikram Roy',
                'role' => 'Operations Lead, LogiCorp',
                'content' => 'Excellent framework. Understanding that emotions trigger physical signals before they manifest as actions helped me break a multi-year cycle of workplace procrastination.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=120&h=120',
            ],
            [
                'name' => 'Neha Saxena',
                'role' => 'Operations Consultant',
                'content' => 'Alolika\'s coaching philosophy is structured, actionable, and free from superficial buzzwords. The BSI framework is a must-have for personal growth.',
                'rating' => 5,
                'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=120&h=120',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
