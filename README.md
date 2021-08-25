# Πρώτο μέρος
Το πρώτο μέρος του test απαιτεί από τον υποψήφιο να δημιουργήσει ένα πολύ απλό CRUD app.

Αυτό το CRUD app, έχει μια πολύ απλή φόρμα στο first_stage branch στο Resources/Views/crud.blade.php και ένα πολύ απλό web.php router.

Αυτό που θα χρειαστεί να δημουργηθεί θα είναι τα παρακάτω:
- Profile Model
- Relationship User<->Profile (one to one)
- Migration για τα profiles με πεδία: foreignId(user_id), first_name, last_name, email, dob,
- Controller
-- Θα χρειαστεί να δημιουργεί έναν χρήστη πριν αποθηκεύσει τα στοιχεία προφίλ (μπορεί είτε με factory, είτε επιτόπου με Model::create())
-- όλα τα πεδία της φόρμας είναι υποχρεωτικά
-- Validation
-- Save και σύνδεση με το User

Αν προλαβαίνει ο υποψήφιος, να δημιουργήσει το Update (U από το CRUD) για να μπορούν να ενημερώνονται τα στοιχεία της φόρμας.

Το πρώτο μέρος έχει διάρκεια 30 λεπτά.

# Δεύτερο μέρος
Στο δεύτερο μέρος του test, διάρκειας έως 60 λεπτά, υποψήφιος θα πρέπει να δημιουργήσει μια σειρά από λειτουργίες κάνοντας χρήση των παρακάτω:
- Queue
- Artisan Commands
- Http Client
- PHP XML processing
- DB/Eloquent

Οι οδηγίες είναι απλές. Υπάρχει ένα απομακρθυσμένο αρχείο XML -> https://mrpotato.fra1.digitaloceanspaces.com/100_random_persons.xml
Το οποίο περιέχει έναν αριθμό από ψεύτικα στοιχεία ατόμων.

Θα πρέπει να γράψετε ένα Artisan Command το οποίο παίρνει argument το παραπάνω URL και το στέλνει για download σε ένα Queue job. Το job αυτό έχει μια δουλειά μόνο, να κατεβάσει και να αποθηκεύσει το XML και να δώσει σε επόμενο Job το αποθηκευμένο αρχείο για επεξεργασία. Ο επεξεργαστής θα πρέπει να περάσει όλα τα στοιχεία του XML σε έναν πίνακα στην βάση (όνομα "persons"). Στο τέλος θα χρειαστεί ένα τελικό Artisan Command να εμφανίζει σε πίνακα CLI όλα τα αποθκευμένα στοιχεία.