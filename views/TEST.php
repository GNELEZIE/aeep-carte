<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Vente de Tee-shirts AEEP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #004080;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .product-image {
            flex: 1 1 300px;
            max-width: 300px;
        }

        .product-details {
            flex: 2 1 400px;
            padding: 1rem;
        }

        .product-details h2 {
            margin-top: 0;
            color: #004080;
        }

        .price {
            font-size: 1.5rem;
            color: #28a745;
        }

        .btn {
            background-color: #004080;
            color: white;
            padding: 0.8rem 1.2rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1rem;
        }

        .btn:hover {
            background-color: #0066cc;
        }

        #cart-message {
            margin-top: 1rem;
            color: #155724;
            background-color: #d4edda;
            padding: 10px;
            display: none;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .product-card {
                flex-direction: column;
                text-align: center;
            }

            .product-details {
                padding: 0;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>AEEP Boutique Officielle</h1>
    <p>Commandez votre tee-shirt officiel AEEP</p>
</header>

<div class="container">
    <div class="product-card">
        <img class="product-image" src="https://www.aeep-pongala.com/wp-content/uploads/2024/06/tshirt-aeep.png" alt="Tee-shirt AEEP">
        <div class="product-details">
            <h2>Tee-shirt officiel AEEP</h2>
            <p>Disponible en plusieurs tailles (S, M, L, XL). 100% coton. Idéal pour les événements de la mutuelle.</p>
            <div class="price">8 000 FCFA</div>
            <button class="btn" onclick="addToCart()">Ajouter au panier</button>
            <div id="cart-message">✅ Tee-shirt ajouté au panier !</div>
        </div>
    </div>
</div>

<script>
    function addToCart() {
        document.getElementById("cart-message").style.display = "block";
        setTimeout(() => {
            document.getElementById("cart-message").style.display = "none";
    }, 3000);
    }
</script>
</body>
</html>
