<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rip Book | Price</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/card_style.css')}}">

    <style>
        .container {
            padding: 20px;
        }

        .plan-detail {
            width: 350px;
            background-color: #3dbac5;
            padding: 15px 30px;
            color: #ffffff;
        }

        .plan-detail strong {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .plan-detail p {
            font-size: 1rem;
            font-weight: 400;
        }
    </style>
</head>

<body>
    @include('layouts.user.header')
    <input type="hidden" id="stripe_key" value="{{ env('STRIPE_KEY') }}" />
    <div class="container">

        <form id="payment-form" method="POST" action="{{ route('subscription.post') }}">
            <div class="plan-detail">
                <p><strong>Plan Name : </strong> {{$plan->name}}</p>
                <p><strong>Price : </strong>${{$plan->price}}</p>
            </div>
            @csrf
            <input type="text" id="input">
            <input type="hidden" name="plan_id" id="plan_id" value="{{$plan->id}}">
            <div class="row">
                <div class="col">
                    <div class="inputBox">
                        <span>Card Holder Name</span>
                        <input type="text" name="name" id="name" placeholder="Jhon Doe">
                        <span class="text-danger name_error error_text"></span>
                    </div>

                    <div class="inputBox">
                        <span>Card Details</span>
                        <div id="payment-element">
                            <!--Stripe.js injects the Payment Element-->
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Pay Now" class="submit-btn">
        </form>
    </div>

    @include('layouts.user.footer')

    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{ asset('asset/js/header.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // const stripe = Stripe('{{ env('
            //     STRIPE_KEY ') }}')
            const stripe = Stripe(document.getElementById('stripe_key').value);
            let elements;

            initialize();

            document
                .querySelector("#payment-form")
                .addEventListener("submit", handleSubmit);

            function initialize() {
                elements = stripe.elements({
                    clientSecret: "{{ $intent->client_secret }}",
                });

                const paymentElement = elements.create("payment");
                paymentElement.mount("#payment-element");
            }

            function showMessage(messageText) {
                const messageContainer = document.querySelector("#payment-message");

                messageContainer.classList.remove("hidden");
                messageContainer.textContent = messageText;

                setTimeout(function() {
                    messageContainer.classList.add("hidden");
                    messageText.textContent = "";
                }, 4000);
            }

            async function handleSubmit(e) {
                e.preventDefault();

                const {
                    setupIntent,
                    error
                } = await stripe.confirmSetup({
                    elements,
                    confirmParams: {
                        // Make sure to change this to your payment completion page
                        return_url: "http://localhost:4242/checkout.html",
                    },
                    redirect: 'if_required'
                });

                // This point will only be reached if there is an immediate error when
                // confirming the payment. Otherwise, your customer will be redirected to
                // your `return_url`. For some payment methods like iDEAL, your customer will
                // be redirected to an intermediate site first to authorize the payment, then
                // redirected to the `return_url`.
                if (error) {
                    if (error.type === "card_error" || error.type === "validation_error") {
                        showMessage(error.message);
                    } else {
                        showMessage("An unexpected error occurred.");
                    }
                } else {
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.getElementById('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'paymentMethod');
                    hiddenInput.setAttribute('value', setupIntent.payment_method);
                    form.appendChild(hiddenInput);

                    form.submit();
                }
            }

        });
    </script>

</body>

</html>