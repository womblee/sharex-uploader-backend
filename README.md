# ShareX uploader backend
Backend for a simple ShareX uploader in PHP.

# How to use
1. Add **upload.php** to your web server.
2. Create an **images/** directory.
3. Open **upload.php**, change the $TOKENS array and insert your own secrets there.

   ![image](https://user-images.githubusercontent.com/52250786/214979763-a4aa47df-4af6-4dc3-b106-01126f8f4be5.png)

4. Open **config.sxcu**, change the **secret** in arguments to one of the ones you changed in the previous step.

   ![image](https://user-images.githubusercontent.com/52250786/214979596-3a105fa2-1f5a-4978-98c5-1a86f7cdb20f.png)

5. Also change every **localhost** mention to your domain.

   ![image](https://user-images.githubusercontent.com/52250786/214979861-516920e2-609a-4c59-8618-56f5df344dbf.png)

6. Apply the config file by double clicking on it.
7. Make ShareX upload the image to a web server after capturing it.

   ![Colorless-Indri_27 01 2023](https://user-images.githubusercontent.com/52250786/214980454-95fe9525-b372-4f1f-90ca-33203316f39d.png)

8. Also make ShareX copy the URL to your clipboard.

   ![image](https://user-images.githubusercontent.com/52250786/214980591-f0d9a180-8349-46f4-ae5e-892f9df278ab.png)
