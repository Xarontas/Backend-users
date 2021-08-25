
Αυτό το CRUD app, έχει μια πολύ απλή φόρμα στο first_stage branch στο Resources/Views/crud.blade.php και ένα πολύ απλό web.php router.

Έχουν δημουργηθεί τα παρακάτω:
- Profile Model
- Relationship User<->Profile (one to one)
- Migration για τα profiles με πεδία: foreignId(user_id), first_name, last_name, email, dob,
- Controller
- Δημιουργεί έναν χρήστη πριν αποθηκεύσει τα στοιχεία προφίλ (αυτό γίνεται με factory)
- όλα τα πεδία της φόρμας είναι υποχρεωτικά
- Validation
- Save και σύνδεση με το User
- Update για να μπορούν να ενημερώνονται τα στοιχεία της φόρμας καθώς και Cancel.
