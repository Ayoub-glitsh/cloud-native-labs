const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = process.env.PORT || 5050;

/* ===========================
   Middleware
=========================== */
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

/* ===========================
   Données (Tableau Produits)
=========================== */
let produits = [
  { num: 11, designation: "Iphone I9", prix: 8000, categorie: "Smartphone" },
  { num: 12, designation: "Iphone i11", prix: 11000, categorie: "Smartphone" },
  { num: 13, designation: "PC LAPTOP HP I3", prix: 4500, categorie: "Ordinateur" },
  { num: 14, designation: "Samsung A10", prix: 2500, categorie: "Smartphone" }
];

/* ===========================
   Routes
=========================== */

// Route GET - afficher tous les produits
app.get('/', (req, res) => {
  res.status(200).json(produits);
});

// Route GET - afficher un produit par numéro
app.get('/products/:num', (req, res) => {
  const num = parseInt(req.params.num);
  const produit = produits.find(p => p.num === num);

  if (!produit) {
    return res.status(404).json({ message: "Produit non trouvé" });
  }

  res.status(200).json(produit);
});

// Route POST - ajouter un nouveau produit
app.post('/products', (req, res) => {
  const newProduit = {
    num: produits.length + 1,
    designation: req.body.designation,
    prix: req.body.prix,
    categorie: req.body.categorie
  };

  produits.push(newProduit);

  res.status(201).json({
    message: "Produit ajouté avec succès",
    produit: newProduit
  });
});

// Route PUT - modifier un produit
app.put('/products/:num', (req, res) => {
  const num = parseInt(req.params.num);
  const produit = produits.find(p => p.num === num);

  if (!produit) {
    return res.status(404).json({ message: "Produit non trouvé" });
  }

  produit.designation = req.body.designation || produit.designation;
  produit.prix = req.body.prix || produit.prix;
  produit.categorie = req.body.categorie || produit.categorie;

  res.status(200).json({
    message: "Produit modifié avec succès",
    produit: produit
  });
});

// Route DELETE - supprimer un produit
app.delete('/products/:num', (req, res) => {
  const num = parseInt(req.params.num);
  const index = produits.findIndex(p => p.num === num);

  if (index === -1) {
    return res.status(404).json({ message: "Produit non trouvé" });
  }

  produits.splice(index, 1);

  res.status(200).json({
    message: "Produit supprimé avec succès"
  });
});

/* ===========================
   Lancement Serveur
=========================== */
app.listen(port, () => {
  console.log(` Serveur démarré sur http://localhost:${port}`);
});