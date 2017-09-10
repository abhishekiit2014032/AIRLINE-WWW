package game;

import java.awt.Color;
import java.awt.Graphics;
import java.awt.Rectangle;
 
public class stage {
	private Rectangle platform =new Rectangle(0,540,800,100);

	public stage()
	{
		 
	}
	
	public boolean isCollided(Rectangle e)
	{
		return platform.intersects(e);
	}
	
 
public void draw(Graphics g)
{
 g.setColor(Color.BLACK);
 g.fillRect(platform.x, platform.y, platform.width, platform.height);
}
}
