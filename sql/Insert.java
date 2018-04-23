//Vincent Raymond
import java.util.Scanner;
import java.io.File;

public class Insert
{
    public static void main(String[] args)
    {
        //Initial insert statement
        System.out.println("INSERT INTO ChnFreqTable VALUES"); 
        try
        {
            Scanner scan = new Scanner(new File("data.txt"));
            while(scan.hasNextLine())
            {
                //Split data based on whitespace
                String line = scan.nextLine();
                String[] collumns=line.split("\\s+");
        
                System.out.print("(");
        
                //Print first two elements        
                System.out.print("\""+collumns[0]+"\",");
                System.out.print("\""+collumns[1]+"\",");
                System.out.print("\"");

                //Since definition has variable whitespace itterate through the appropriate indexes and print as one collumn 
                for(int x=2;x<collumns.length-6;x++)
                {
                    System.out.print(collumns[x]+" ");   
                }
                System.out.print("\",");

                //Print remaining collumns except for radical number
                for(int x=collumns.length-6;x<collumns.length;x++)
                {
                    if(x!=collumns.length-5)
                    {
                        if(x==collumns.length-1)
                        {
                            System.out.print(collumns[x]);
                        }
                        else if(x==collumns.length-6)
                        {
                            System.out.print("\""+collumns[x]+"\",");
                        }
                        else
                        {
                            System.out.print(collumns[x]+ ",");
                        }
                    }
                }
				
				//Check if the scanner is at the end of file before adding ending semicolon
				if(scan.hasNextLine())
				{
					System.out.print("),\n");
				}
				else
				{
					System.out.print(");");
				}
            }
        }
        catch(Exception e)
        {

        }
    }
}