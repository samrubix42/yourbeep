<x-mail::message>
# New Masterclass Registration

A new student has successfully registered and secured a spot in the **Behavioural Wellbeing Masterclass**.

### Student Details
- **Name:** {{ $registration->name }}
- **Email:** {{ $registration->email }}
- **WhatsApp Mobile:** {{ $registration->phone }}
- **Amount Paid:** ₹{{ $registration->price }} INR

<x-mail::button :url="config('app.url')">
Visit Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
