package game;

import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.Rectangle;



public class End {
	
	private Rectangle playagain=new Rectangle(350,200,150,80);
	
	public void draw(Graphics g)
	{
		g.setColor(Color.gray); 
		g.fillRect(0, 0,800,600);
		g.setColor(Color.BLACK); 
		g.setFont(new Font("Century Gothic",Font.BOLD,50));
		g.drawString("game over", 300, 100);
		
		Font f2=new Font("impact",Font.BOLD,60);
		g.setFont(f2);
		g.setColor(Color.DARK_GRAY);
		
		Graphics2D g2d=(Graphics2D) g;
		g.drawString("play", 300+65,210+30+20);
		g2d.draw(playagain);

	}

}
