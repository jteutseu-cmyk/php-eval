**Total : 100 points — Seuil de réussite : 50/100**  
**Durée estimée : ~30 minutes**  
**Documents autorisés : Aucun**

> Répondez directement dans ce fichier en remplaçant les lignes `_Votre réponse ici_`.  
> Écrivez votre nom et prénom ci-dessous.

**Nom et prénom :** ___TEUTSEU JOEL____________________

---

## Question 1 — `isset()` vs `empty()` (40 points)

### a) La fonction `isset()` *(8 pts)*

Donnez la syntaxe complète de `isset()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

la syntaxe complete de isset(): isset($var) 
lorsqu'elle retourne true: soit la variable est declarer, soit la variable a une autre valeur que (null)
lorsqu'elle retourne false: soit la variable vaut null, soit la variable n'existe pas.

---

### b) La fonction `empty()` *(8 pts)*

Donnez la syntaxe complète de `empty()`, expliquez quand elle retourne `TRUE` et quand elle retourne `FALSE`.

la syntaxe complete de empty(): empty($var)
lorsqu'elle retourne true: c'est quand sa variable n'existe pas ou quand sa valeur est considerer comme (vide)
et lorsqu'elle retourne false: quand la variable existe et contient une valeur non nulle et non egale a 0.
---

### c) Différence fondamentale *(8 pts)*

Quelle est la différence entre `isset()` et `empty()` lorsqu'une variable vaut `0` ? Justifiez votre réponse.

la difference est que si une valeur vaut 0, isset() retourne true alors que empty() retourne true aussi parceque 0 est considerer comme une valeur null en PHP.
justification 
isset($var)vérifiez seulement si la variable existe et n'est pas null; or 0 n'est pas null, donc isset($var) vaut TRUE tandisque empty($var) teste si la valeur est (vide) au sens PHP, et 0 fait partie des valeurs considérées comme vides, au même titre que "0", "", false ou null.

---

### d) Tableau comparatif *(16 pts)*

Complétez ce tableau (TRUE ou FALSE) :

| Valeur de `$var` | `isset($var)` | `empty($var)` |
|---|---|---|
| `$var = 0;` | T | T |
| `$var = "";` | T | T |
| `$var = "bonjour";` | T | F |
| Variable non déclarée | F | V |
| `$var = "0";` | V | V |
| `$var = null;` | F | V |
| `$var = false;` | V| V |
| `$var = [];` | V | V |

---

## Question 2 — GET / POST et manipulation de fichiers (60 points)

### a) GET vs POST *(15 pts)*

Expliquez la différence entre la méthode `GET` et la méthode `POST` pour le passage de variables en PHP. Dans quel cas préfère-t-on utiliser `GET` ? Quelle est la limite de caractères de `GET` ?

la methode GET transmet les variable dans l'url tandisque la methode POST les transmettent dans le corps de la requete HTTP dont elle n'apparait pas dans le corps du message.

---

### b) Passage de paramètres dans l'URL *(15 pts)*

Donnez la syntaxe permettant de passer les variables `categorie` (valeur : "php") et `page` (valeur : 2) dans une URL pointant vers `catalogue.php`.

Montrez ensuite comment récupérer ces deux variables en PHP côté serveur.

_Votre réponse ici_

---

### c) Les modes d'ouverture de `fopen()` *(20 pts)*

Citez et expliquez les **6 modes d'ouverture** possibles de la fonction `fopen()`. Pour chacun, précisez : lecture, écriture, ou les deux ; et où est placé le pointeur.

r oui pour la lecture, oui pour l'ecriture et position au debut du fichier
r+ oui pour la lecture, oui pour l'ecriture et position au debut du fichier
w non pour la lecture et oui pour l'ecriture et position au debut du fichier 
w+ oui pour la lecture, oui pour l'ecriture et position au debut du fichier
a oui pour l'ecriture position a la fin du fichier
a+ oui pour l'ecriture et la lecture avec un plus position lecture au debut et ecriture a la fin.
---

### d) La fonction `header()` *(10 pts)*

À quoi sert la fonction `header()` ? Donnez un exemple concret. Quelle contrainte très importante doit-on respecter lors de son utilisation, et pourquoi ?
la fonction header permet d'ancrer l'ente
---

## 📊 Barème

| Question | Sous-question | Points |
|---|---|---|
| Q1 — isset() vs empty() | a) isset() | 8 |
| | b) empty() | 8 |
| | c) Différence avec 0 | 8 |
| | d) Tableau | 16 |
| Q2 — GET/POST/fichiers | a) GET vs POST | 15 |
| | b) Passage de paramètres | 15 |
| | c) Modes fopen() | 20 |
| | d) header() | 10 |
| **TOTAL** | | **100** |

---

> ⚠️ Seuil de réussite : **50/100 minimum**
