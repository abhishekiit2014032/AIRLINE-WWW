package game;

import java.awt.Color;
import java.awt.Graphics;
import java.awt.Rectangle;

public class enemy extends entity {
	
    private Rectangle hibx;
    private boolean dead=false;
    private int ix,iy;
    private dodo instance;
    
	public enemy(dodo instance,int x, int y) {
		super(x, y);
		this.instance=instance;
		hibx=new Rectangle(x,y,32,32);
		ix=0;iy=1;		 
	} 
	
	public Rectangle getbox()
	{
		return hibx;
	}
	private void move()
	{
		
		if(instance.getstage().isCollided(hibx))
		{
			iy=0;
			dead=true;
		}

		hibx.x=hibx.x+ix;
		hibx.y=hibx.y+iy;
	} 
	
  public boolean isdead()
	{
		return dead;
	}
  
  
  public void draw(Graphics g)
  {
	  move();
	  g.setColor(Color.CYAN);
	  g.fillRect(hibx.x, hibx.y, hibx.width, hibx.height);
  }
}
