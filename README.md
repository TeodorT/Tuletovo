#sve u uglastim zagradama [] zameni

/**********************************
** GIT
**********************************/


#Kloniranje repozitorijuma
	git clone [link repozitorije]

#Proveravanje statusa za commit
	git status

#Dodavanje za commit
	git add [fajl koji hoces da dodas, . (tacka) za dodavanje svega]

#Commitovanje
	git commit -m "[poruka]"

#pullovanje novih promena na repo
	git pull origin [branch, (za sada cemo koristiti maste "git pull origin master")]

#pushovanje commitovanih promena na repo
	git push origin [branch (isto kako pull)]

Ovako, prvo se projekat klonira, kada napravis neke promene das "git status"
da proveris sta si menjao, pogledas koje promene hoces da podignes na github i dodas ih sa "git add".
Vecinom ces dodavati sve tako da ce komanda izgledati "git add ." ovako.
Polse add-a moras da commitujes promene, 'git commit -m "ovde napises strucno kakve promene su odradjene"' 
vecinom se u message pisu dva tri slova max, da bude pregledno

Posle commitovanja uvek uradis prvo pull pa onda push, da ne bi doslo do konflikata i do brisanja promena
(ako je npr neko drugi radio na istom fajlu kao i ti, moze se desiti da se njegove promene obrisu ako si samo pullovao)

Sve ce ti ovo biti jasnije, kad krenes malo da koristis


#kasnije cemo i ovim komandama

git reset --hard origin/master
git stash

/**********************************
** HTML (reference, napomene)
**********************************/

/**********************************
** CSS (reference, napomene)
**********************************/

Dodajes u head html fajla, primer : 

<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- Pocetak -->
SELEKTOR {
	DEKLARACIJA;

	DEKLARACIJA;
	.
	.
	.
}
<!-- Kraj -->
Deklaracija = Osobina:vrednost;
Npr:
	font-size:20px;
	color:#ffffff;
	width-max:300px;
	.
	.
	.

Selektori:
Ima vise vrsta selektora

-Selektori klase. Pisu se sa tackom ispred ".ime-klase"

-Selektori id. Pisu se sa # ispred "#id-elementa"

-Selektori elemenata. Pisu se kao ime elementa npr. div, nav, html, p, span, body...

Grupisanje selektora:

Mozes da selektujes vise elemenata odjednom:

primer 1.1:

.neka-klasa, #neki-id, div, h1 {
	font-size: 20px;
}

Svi selektovani elementi ce imati font velicine 20 piksela.


primer 1.2:

	.neka-klasa p {
		font-size: 20px;
	}

u ovom primeru nismo stavili zarez izmedju, to znaci da ne selektujes dva elementa
vec samo jedan.
Selektovace se p, koji se NALAZI u klasi pod imenom .neka-klasa
	<div class="main">
		<div class="neka-klasa">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolorum et unde inventore, numquam quis distinctio aliquid, doloremque perspiciatis provident pariatur ea sint tempore nobis quos vel. Totam laborum, reiciendis.</p>
		</div>
		<div class="neka-druga-klasa">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel rerum iusto odio earum necessitatibus molestias, ad hic, laudantium. At id eius eum vero, enim expedita a inventore excepturi accusamus animi!</p>
		</div>
	</div>

mogao si da napises i:
	.main .neka-klasa p{
		font-size: 25px;
	}

(Ako bi napisao i to i to, sta mislis koja bi se izvrsila, pokusaj da napravis takvo nesto, ili kopiraj pa vidi)




/**********************************
** BOOTSTRAP
**********************************/

/**********************************
** SASS
**********************************/

/**********************************
** JAVASCRIPT (reference, napomene)
**********************************/

/**********************************
** ANGULAR.js
**********************************/

/**********************************
** WORDPRESS
**********************************/

/**********************************
** PHP (reference, napomene)
**********************************/

