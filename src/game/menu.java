 package game;

import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;


public class menu {
	private Rectangle play=new Rectangle(350,200,150,80);
	private Rectangle help=new Rectangle(350,300,150,80);
	private Rectangle quit=new Rectangle(350,400,150,80);
	
	
	
 


	public void draw(Graphics g)
	{
		 
		g.setColor(Color.orange);

		Graphics2D g2d=(Graphics2D) g;
		g.fillRect(0, 0, 800,600);
		Font f1=new Font("arial",Font.BOLD,100);
		g.setFont(f1);
		g.setColor(Color.BLACK);
		g.drawString("small game", 150,100);
		Font f2=new Font("impact",Font.BOLD,60);
		g.setFont(f2);
		g.setColor(Color.DARK_GRAY);
		g.drawString("play", 300+65,210+30+20);
		g.drawString("help", 300+65,210+30+100+20);
		g.drawString("quit", 300+65,210+30+200+20);
		
		g2d.draw(play);
		g2d.draw(help);
		g2d.draw(quit);
	}
}
