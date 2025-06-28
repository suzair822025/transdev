<h2>New Signup Submission</h2>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Service Type:</strong> {{ $data['service_type'] }}</p>
@if(!empty($data['language_from']) || !empty($data['language_to']))
  <p><strong>Language From:</strong> {{ $data['language_from'] ?? 'N/A' }}</p>
  <p><strong>Language To:</strong> {{ $data['language_to'] ?? 'N/A' }}</p>
@endif
<p><strong>Message:</strong> {{ $data['message'] ?? 'N/A' }}</p>

<p>An attachment is included if uploaded.</p>
