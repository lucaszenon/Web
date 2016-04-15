public class Palindromo{
	
  public static void main(String x[]) {
    String palindromo = x[0];
	int tam = Integer.parseInt (x[1]);
	int tam1;
	int tam2;
	String aux[];
	aux = new String[tam];
	int cont;
	int py= tam;
	boolean truzao ;
	int contad = 0;
	int contad1;
	int b = 0 ;
	
	do
	{
	cont = 0;	
	truzao = true ;	
	tam2 = tam;
	tam1 = tam2 - 1;
	do
	{
	aux[cont]= palindromo.substring(tam1,tam2);
		
		
	cont +=1;
	tam2 = tam1;
    tam1 -= 1;	
	}while(cont < py);	
	System.out.println("O palindromo:");
	contad= b ;
	contad1= b + 1;
	cont=0;
	tam1 = tam;
	do
	{
	if (aux[cont].equals(palindromo.substring(contad, contad1)) ){
	}
	else{
		truzao = false;
		
	}
	
	cont +=1;
	contad = contad1;
	contad1 +=1;	
	}while(cont < py);
    tam += 1;
	b +=1;
	}while(truzao == false);
	
	cont = 0;	
	System.out.println("O palindromo:");
	do
	{
	System.out.print(aux[cont]+ "__");
		
		
	cont +=1;
	}while(cont < py);	
	
	

	}
}